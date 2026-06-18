<?php
/**
 * Ferroxa theme functions.
 *
 * Self-contained multilingual (EN / AR / FR) corporate theme.
 * Language is selected with a ?lang= query var (persisted in a cookie),
 * with automatic RTL for Arabic. No translation plugin is required.
 *
 * @package Ferroxa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FERROXA_VERSION', '1.2.0' );
define( 'FERROXA_SUPPORTED_LANGS', 'en,ar,fr' );

/* -------------------------------------------------------------------------
 * Theme setup
 * ---------------------------------------------------------------------- */

function ferroxa_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// Header navigation is rendered from translated markup, but we still
	// register a menu location for completeness.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ferroxa' ),
	) );
}
add_action( 'after_setup_theme', 'ferroxa_setup' );

/* -------------------------------------------------------------------------
 * Language handling
 * ---------------------------------------------------------------------- */

/**
 * List of supported language codes.
 */
function ferroxa_languages() {
	return explode( ',', FERROXA_SUPPORTED_LANGS );
}

/**
 * Resolve the active language.
 *
 * Priority: ?lang= query var -> cookie -> default ('en').
 */
function ferroxa_lang() {
	static $lang = null;
	if ( null !== $lang ) {
		return $lang;
	}

	$supported = ferroxa_languages();

	if ( isset( $_GET['lang'] ) ) {
		$candidate = sanitize_key( wp_unslash( $_GET['lang'] ) );
		if ( in_array( $candidate, $supported, true ) ) {
			$lang = $candidate;
			if ( ! headers_sent() ) {
				setcookie( 'ferroxa_lang', $lang, time() + YEAR_IN_SECONDS, COOKIEPATH ? COOKIEPATH : '/' );
			}
			return $lang;
		}
	}

	if ( isset( $_COOKIE['ferroxa_lang'] ) ) {
		$candidate = sanitize_key( wp_unslash( $_COOKIE['ferroxa_lang'] ) );
		if ( in_array( $candidate, $supported, true ) ) {
			$lang = $candidate;
			return $lang;
		}
	}

	$lang = 'en';
	return $lang;
}

/**
 * Is the current language right-to-left?
 */
function ferroxa_is_rtl() {
	return 'ar' === ferroxa_lang();
}

/**
 * Allow ?lang= as a public query var so WordPress keeps it intact.
 */
function ferroxa_query_vars( $vars ) {
	$vars[] = 'lang';
	return $vars;
}
add_filter( 'query_vars', 'ferroxa_query_vars' );

/**
 * Build a URL to a theme page (by slug), preserving the active language.
 *
 * Special slug "home" returns the site front page.
 */
function ferroxa_url( $slug = 'home', $anchor = '' ) {
	$lang = ferroxa_lang();

	if ( 'home' === $slug ) {
		$url = home_url( '/' );
	} else {
		$page = get_page_by_path( $slug );
		$url  = $page ? get_permalink( $page ) : home_url( '/' );
	}

	$url = add_query_arg( 'lang', $lang, $url );

	if ( $anchor ) {
		$url .= '#' . ltrim( $anchor, '#' );
	}

	return esc_url( $url );
}

/**
 * Build a "switch to this language" URL for the current request.
 *
 * Operates on the current REQUEST_URI so it preserves the page and any other
 * query args, only setting/replacing ?lang=.
 */
function ferroxa_switch_url( $target_lang ) {
	return esc_url( add_query_arg( 'lang', $target_lang ) );
}

/**
 * Full URL to a theme asset (css/js/images/videos).
 */
function ferroxa_asset( $path ) {
	return esc_url( get_template_directory_uri() . '/' . ltrim( $path, '/' ) );
}

/**
 * Echo a translated UI string (nav, footer, buttons) for the active language.
 */
function ferroxa_t( $key ) {
	echo ferroxa_get_t( $key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

function ferroxa_get_t( $key ) {
	$strings = ferroxa_strings();
	$lang    = ferroxa_lang();
	if ( isset( $strings[ $lang ][ $key ] ) ) {
		return $strings[ $lang ][ $key ];
	}
	if ( isset( $strings['en'][ $key ] ) ) {
		return $strings['en'][ $key ];
	}
	return $key;
}

require get_template_directory() . '/inc/lang.php';

/**
 * Load the correct content partial for a base name, falling back to English.
 */
function ferroxa_content( $base ) {
	$lang = ferroxa_lang();
	$file = get_template_directory() . "/parts/{$base}-{$lang}.php";
	if ( ! file_exists( $file ) ) {
		$file = get_template_directory() . "/parts/{$base}-en.php";
	}
	if ( file_exists( $file ) ) {
		include $file;
	}
}

/* -------------------------------------------------------------------------
 * Assets
 * ---------------------------------------------------------------------- */

function ferroxa_enqueue() {
	$uri = get_template_directory_uri();
	$v   = FERROXA_VERSION;

	// External fonts / icons (kept identical to the original site).
	wp_enqueue_style( 'ferroxa-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'ferroxa-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), null );

	// Core stylesheets, in the same order the static site loaded them.
	$styles = array(
		'modern-design-system',
		'modern-components',
		'modern-animations',
		'modern-layouts',
		'modern-optimizations',
		'network-section-clean',
		'products-page-detailed',
		'style',
		'products-page',
		'products-page-override',
		'products-page-force',
		'mobile',
		'themes',
		'responsive',
		'no-animations',
	);
	$deps = array();
	foreach ( $styles as $handle ) {
		wp_enqueue_style( "ferroxa-{$handle}", "{$uri}/assets/css/{$handle}.css", $deps, $v );
		$deps = array( "ferroxa-{$handle}" );
	}

	// Right-to-left overrides for Arabic.
	if ( ferroxa_is_rtl() ) {
		wp_enqueue_style( 'ferroxa-rtl', "{$uri}/assets/css/rtl.css", $deps, $v );
	}

	// WordPress style.css (theme header only, harmless to load last).
	wp_enqueue_style( 'ferroxa-theme', get_stylesheet_uri(), array(), $v );

	// Scripts (original behaviour preserved; language.js replaced by wp-language.js).
	wp_enqueue_script( 'ferroxa-main', "{$uri}/assets/js/main.js", array(), $v, true );
	wp_enqueue_script( 'ferroxa-modern', "{$uri}/assets/js/modern-interactions.js", array(), $v, true );
	wp_enqueue_script( 'ferroxa-mobile', "{$uri}/assets/js/mobile.js", array(), $v, true );
	wp_enqueue_script( 'ferroxa-animations', "{$uri}/assets/js/animations.js", array(), $v, true );
	wp_enqueue_script( 'ferroxa-theme-js', "{$uri}/assets/js/theme.js", array(), $v, true );
	wp_enqueue_script( 'ferroxa-language', "{$uri}/assets/js/wp-language.js", array(), $v, true );
}
add_action( 'wp_enqueue_scripts', 'ferroxa_enqueue' );

/* -------------------------------------------------------------------------
 * Auto-create the site structure on theme activation
 * ---------------------------------------------------------------------- */

/**
 * Pages the theme expects, mapped to their page templates.
 */
function ferroxa_required_pages() {
	return array(
		'home'                  => array( 'title' => 'Home',            'template' => '' ),
		'about'                 => array( 'title' => 'About',           'template' => 'page-about.php' ),
		'products'              => array( 'title' => 'Products',        'template' => 'page-products.php' ),
		'contact'               => array( 'title' => 'Contact',         'template' => 'page-contact.php' ),
		'blog'                  => array( 'title' => 'Blog',            'template' => 'page-blog.php' ),
		'product-copper'        => array( 'title' => 'Copper',          'template' => 'template-product-copper.php' ),
		'product-aluminum'      => array( 'title' => 'Aluminum',        'template' => 'template-product-aluminum.php' ),
		'product-zinc'          => array( 'title' => 'Zinc',            'template' => 'template-product-zinc.php' ),
		'product-gold'          => array( 'title' => 'Gold',            'template' => 'template-product-gold.php' ),
		'product-steel-billets' => array( 'title' => 'Steel Billets',   'template' => 'template-product-steel-billets.php' ),
		'product-steel-slabs'   => array( 'title' => 'Steel Slabs',     'template' => 'template-product-steel-slabs.php' ),
	);
}

function ferroxa_after_switch_theme() {
	$front_id = 0;

	foreach ( ferroxa_required_pages() as $slug => $data ) {
		$existing = get_page_by_path( $slug );

		if ( $existing ) {
			$page_id = $existing->ID;
		} else {
			$page_id = wp_insert_post( array(
				'post_title'   => $data['title'],
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			) );
		}

		if ( $page_id && ! is_wp_error( $page_id ) ) {
			if ( ! empty( $data['template'] ) ) {
				update_post_meta( $page_id, '_wp_page_template', $data['template'] );
			}
			if ( 'home' === $slug ) {
				$front_id = $page_id;
			}
		}
	}

	if ( $front_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_id );
	}

	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'ferroxa_after_switch_theme' );

/* -------------------------------------------------------------------------
 * Body classes: theme + language + direction
 * ---------------------------------------------------------------------- */

function ferroxa_body_class( $classes ) {
	$classes[] = 'light-theme';
	$classes[] = 'lang-' . ferroxa_lang();
	if ( ferroxa_is_rtl() ) {
		$classes[] = 'rtl';
	}
	return $classes;
}
add_filter( 'body_class', 'ferroxa_body_class' );
