<?php
/**
 * Theme header: <head>, top navigation, mega-menu, mobile menu, language switcher.
 *
 * @package Ferroxa
 */

$lang   = ferroxa_lang();
$is_rtl = ferroxa_is_rtl();
$dir    = $is_rtl ? 'rtl' : 'ltr';

// Determine which top-level nav item is active.
$active = 'home';
if ( is_page( 'about' ) ) {
	$active = 'about';
} elseif ( is_page( 'products' ) || ( is_page() && false !== strpos( get_post_field( 'post_name' ), 'product-' ) ) ) {
	$active = 'products';
} elseif ( is_page( 'contact' ) ) {
	$active = 'contact';
} elseif ( is_page( 'blog' ) || is_home() ) {
	$active = 'blog';
}

$lang_names = array( 'en' => 'English', 'ar' => 'العربية', 'fr' => 'Français' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="<?php echo esc_attr( $dir ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0f2137">
	<link rel="preload" href="<?php echo ferroxa_asset( 'assets/images/logo.png' ); ?>" as="image">
	<link rel="icon" type="image/png" href="<?php echo ferroxa_asset( 'assets/images/favicon.png' ); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo ferroxa_asset( 'assets/images/favicon.ico' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'light-theme' ); ?> data-theme="light" data-lang="<?php echo esc_attr( $lang ); ?>">
<?php wp_body_open(); ?>

<!-- Header -->
<header class="main-header" id="main-header">
	<div class="header-container">
		<!-- Logo -->
		<div class="logo-section">
			<a href="<?php echo ferroxa_url( 'home' ); ?>" class="logo-link">
				<img src="<?php echo ferroxa_asset( 'assets/images/logo.png' ); ?>" alt="Ferroxa" class="logo-img">
			</a>
		</div>

		<!-- Navigation -->
		<nav class="main-navigation" id="main-nav">
			<ul class="nav-menu">
				<li class="nav-item">
					<a href="<?php echo ferroxa_url( 'home' ); ?>" class="nav-link<?php echo 'home' === $active ? ' active' : ''; ?>"><?php ferroxa_t( 'nav_home' ); ?></a>
				</li>
				<li class="nav-item">
					<a href="<?php echo ferroxa_url( 'about' ); ?>" class="nav-link<?php echo 'about' === $active ? ' active' : ''; ?>"><?php ferroxa_t( 'nav_about' ); ?></a>
				</li>
				<li class="nav-item dropdown mega-dropdown">
					<a href="<?php echo ferroxa_url( 'products' ); ?>" class="nav-link<?php echo 'products' === $active ? ' active' : ''; ?>">
						<?php ferroxa_t( 'nav_products' ); ?> <i class="fas fa-chevron-down"></i>
					</a>
					<ul class="dropdown-menu mega-menu">
						<!-- Ferrous Metals -->
						<li class="dropdown-category">
							<a href="<?php echo ferroxa_url( 'products', 'ferrous' ); ?>" class="category-link">
								<i class="fas fa-industry"></i>
								<?php ferroxa_t( 'cat_ferrous' ); ?> <i class="fas fa-chevron-right"></i>
							</a>
							<ul class="submenu">
								<li class="subcategory-header">
									<a href="<?php echo ferroxa_url( 'products', 'semi-finished' ); ?>" class="subcategory-title"><?php ferroxa_t( 'sub_semifinished' ); ?></a>
								</li>
								<li><a href="<?php echo ferroxa_url( 'product-steel-billets' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_steel_billets' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'product-steel-slabs' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_steel_slabs' ); ?></a></li>

								<li class="subcategory-header">
									<a href="<?php echo ferroxa_url( 'products', 'flat' ); ?>" class="subcategory-title"><?php ferroxa_t( 'sub_flat' ); ?></a>
								</li>
								<li><a href="<?php echo ferroxa_url( 'products', 'hrc' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_hrc' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'crc' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_crc' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'galvanized' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_galvanized' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'plates' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_plates' ); ?></a></li>

								<li class="subcategory-header">
									<a href="<?php echo ferroxa_url( 'products', 'long' ); ?>" class="subcategory-title"><?php ferroxa_t( 'sub_long' ); ?></a>
								</li>
								<li><a href="<?php echo ferroxa_url( 'products', 'rebar' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_rebar' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'wire-rods' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_wire_rods' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'structural' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_structural' ); ?></a></li>
							</ul>
						</li>

						<!-- Non-Ferrous Metals -->
						<li class="dropdown-category">
							<a href="<?php echo ferroxa_url( 'products', 'non-ferrous' ); ?>" class="category-link">
								<i class="fas fa-atom"></i>
								<?php ferroxa_t( 'cat_nonferrous' ); ?> <i class="fas fa-chevron-right"></i>
							</a>
							<ul class="submenu">
								<li><a href="<?php echo ferroxa_url( 'product-copper' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_copper' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'product-aluminum' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_aluminum' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'product-zinc' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_zinc' ); ?></a></li>
							</ul>
						</li>

						<!-- Precious Metals -->
						<li class="dropdown-category">
							<a href="<?php echo ferroxa_url( 'products', 'precious' ); ?>" class="category-link">
								<i class="fas fa-gem"></i>
								<?php ferroxa_t( 'cat_precious' ); ?> <i class="fas fa-chevron-right"></i>
							</a>
							<ul class="submenu">
								<li><a href="<?php echo ferroxa_url( 'product-gold' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_gold' ); ?></a></li>
								<li><a href="<?php echo ferroxa_url( 'products', 'silver' ); ?>" class="submenu-link"><?php ferroxa_t( 'p_silver' ); ?></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?php echo ferroxa_url( 'contact' ); ?>" class="nav-link<?php echo 'contact' === $active ? ' active' : ''; ?>"><?php ferroxa_t( 'nav_contact' ); ?></a>
				</li>
			</ul>
		</nav>

		<!-- Header Controls -->
		<div class="header-controls">
			<!-- Language Selector -->
			<div class="language-selector">
				<button class="lang-toggle" id="lang-toggle" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-globe"></i>
					<span class="current-lang"><?php echo esc_html( strtoupper( $lang ) ); ?></span>
					<i class="fas fa-chevron-down"></i>
				</button>
				<ul class="lang-menu" id="lang-menu">
					<?php foreach ( array( 'en', 'ar', 'fr' ) as $code ) : ?>
						<li>
							<a href="<?php echo ferroxa_switch_url( $code ); ?>" class="lang-option<?php echo $code === $lang ? ' active' : ''; ?>" data-lang="<?php echo esc_attr( $code ); ?>">
								<img src="<?php echo ferroxa_asset( 'assets/images/flags/' . $code . '.svg' ); ?>" alt="<?php echo esc_attr( $lang_names[ $code ] ); ?>"> <?php echo esc_html( $lang_names[ $code ] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<!-- Theme Toggle -->
			<button class="theme-toggle" id="theme-toggle" title="Toggle Dark/Light Mode">
				<i class="fas fa-moon dark-icon"></i>
				<i class="fas fa-sun light-icon"></i>
			</button>

			<!-- Mobile Menu Toggle -->
			<button class="mobile-menu-toggle" id="mobile-menu-toggle">
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
			</button>
		</div>
	</div>

	<!-- Mobile Navigation Overlay -->
	<div class="mobile-nav-overlay" id="mobile-nav-overlay">
		<div class="mobile-nav-content">
			<div class="mobile-nav-header">
				<img src="<?php echo ferroxa_asset( 'assets/images/logo.png' ); ?>" alt="Ferroxa" class="mobile-logo">
				<button class="mobile-nav-close" id="mobile-nav-close">
					<i class="fas fa-times"></i>
				</button>
			</div>
			<ul class="mobile-nav-menu">
				<li><a href="<?php echo ferroxa_url( 'home' ); ?>" class="mobile-nav-link"><?php ferroxa_t( 'nav_home' ); ?></a></li>
				<li><a href="<?php echo ferroxa_url( 'about' ); ?>" class="mobile-nav-link"><?php ferroxa_t( 'nav_about' ); ?></a></li>
				<li><a href="<?php echo ferroxa_url( 'home', 'services' ); ?>" class="mobile-nav-link"><?php ferroxa_t( 'nav_whatwedo' ); ?></a></li>
				<li class="mobile-nav-category">
					<div class="mobile-category-header">
						<i class="fas fa-cube"></i>
						<?php ferroxa_t( 'nav_products' ); ?>
					</div>
					<div class="mobile-subcategory">
						<div class="mobile-subheader">
							<i class="fas fa-industry"></i>
							<?php ferroxa_t( 'cat_ferrous' ); ?>
						</div>
						<a href="<?php echo ferroxa_url( 'product-steel-billets' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_steel_billets' ); ?></a>
						<a href="<?php echo ferroxa_url( 'product-steel-slabs' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_steel_slabs' ); ?></a>
					</div>
					<div class="mobile-subcategory">
						<div class="mobile-subheader">
							<i class="fas fa-atom"></i>
							<?php ferroxa_t( 'cat_nonferrous' ); ?>
						</div>
						<a href="<?php echo ferroxa_url( 'product-copper' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_copper' ); ?></a>
						<a href="<?php echo ferroxa_url( 'product-zinc' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_zinc' ); ?></a>
						<a href="<?php echo ferroxa_url( 'product-aluminum' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_aluminum' ); ?></a>
					</div>
					<div class="mobile-subcategory">
						<div class="mobile-subheader">
							<i class="fas fa-gem"></i>
							<?php ferroxa_t( 'cat_precious' ); ?>
						</div>
						<a href="<?php echo ferroxa_url( 'product-gold' ); ?>" class="mobile-sub-link"><?php ferroxa_t( 'p_gold_mobile' ); ?></a>
					</div>
				</li>
				<li><a href="<?php echo ferroxa_url( 'contact' ); ?>" class="mobile-nav-link"><?php ferroxa_t( 'nav_contact' ); ?></a></li>
				<li><a href="<?php echo ferroxa_url( 'blog' ); ?>" class="mobile-nav-link"><?php ferroxa_t( 'nav_blog' ); ?></a></li>
			</ul>
		</div>
	</div>
</header>
