#!/usr/bin/env python3
"""Build WordPress content partials from the static Ferroxa HTML export.

For each page/language it extracts the markup between </header> and the
opening <footer ...> (i.e. the unique page body), then rewrites:
  * asset paths  -> <?php echo ferroxa_asset('assets/...'); ?>
  * internal links -> <?php echo ferroxa_url('slug', 'anchor'); ?>
"""

import os
import re

SRC = os.path.abspath(os.path.join(os.path.dirname(__file__), '..'))
OUT = os.path.join(os.path.dirname(__file__), 'ferroxa', 'parts')

LANGS = ['en', 'ar', 'fr']

# base name -> source filename stem (without _lang=xx.html)
PAGES = {
    'home': 'index.html',
    'about': 'about.php',
    'products': 'products.php',
    'contact': 'contact.php',
    'blog': 'blog.php',
    'product-copper': 'product-copper.php',
    'product-aluminum': 'product-aluminum.php',
    'product-zinc': 'product-zinc.php',
    'product-gold': 'product-gold.php',
    'product-steel-billets': 'product-steel-billets.php',
    'product-steel-slabs': 'product-steel-slabs.php',
}

# Order matters: most specific prefixes first.
LINK_MAP = [
    ('product-steel-billets', 'product-steel-billets'),
    ('product-steel-slabs', 'product-steel-slabs'),
    ('product-copper', 'product-copper'),
    ('product-aluminum', 'product-aluminum'),
    ('product-zinc', 'product-zinc'),
    ('product-gold', 'product-gold'),
    ('products', 'products'),
    ('about', 'about'),
    ('contact', 'contact'),
    ('blog', 'blog'),
    ('index', 'home'),
]


def extract_body(html):
    end_header = html.find('</header>')
    if end_header == -1:
        start = 0
    else:
        start = end_header + len('</header>')
    footer = html.find('<footer', start)
    if footer == -1:
        body = html[start:]
    else:
        body = html[start:footer]
    # Drop a trailing "<!-- Footer -->" style comment if present.
    body = re.sub(r'<!--\s*Footer\s*-->\s*$', '', body.strip(), flags=re.I)
    return body.strip()


def rewrite_assets(html):
    # Normalise the encoded space in the hero logo filename.
    html = html.replace('Logo&#32;Favcon.png', 'Logo Favcon.png')

    # src/href/poster="assets/..."
    html = re.sub(
        r'(src|href|poster)="assets/([^"]*)"',
        lambda m: '%s="<?php echo ferroxa_asset(\'assets/%s\'); ?>"' % (m.group(1), m.group(2)),
        html,
    )
    # url(assets/...) inside inline styles
    html = re.sub(
        r"url\((['\"]?)assets/([^)'\"]*)\1\)",
        lambda m: "url(<?php echo ferroxa_asset('assets/%s'); ?>)" % m.group(2),
        html,
    )
    return html


def map_internal(href, is_home_partial):
    raw = href.strip()

    # Leave external / special links untouched.
    if raw.startswith(('http://', 'https://', 'mailto:', 'tel:', 'javascript:')):
        return None
    if raw == '#':
        return None
    if raw.startswith('#'):
        return None  # in-page anchor, keep as-is

    low = raw.lower()

    # Identify the target page by prefix.
    slug = None
    for prefix, mapped in LINK_MAP:
        if low.startswith(prefix):
            slug = mapped
            break
    if slug is None:
        return None  # unknown, leave untouched

    # Extract an anchor if present (text after '#', before any '?').
    anchor = ''
    if '#' in raw:
        anchor = raw.split('#', 1)[1]
        anchor = anchor.split('?', 1)[0]
        anchor = anchor.strip()

    if slug == 'home':
        if anchor:
            if is_home_partial:
                return '#' + anchor  # in-page smooth scroll
            return "<?php echo ferroxa_url('home', '%s'); ?>" % anchor
        return "<?php echo ferroxa_url('home'); ?>"

    if anchor:
        return "<?php echo ferroxa_url('%s', '%s'); ?>" % (slug, anchor)
    return "<?php echo ferroxa_url('%s'); ?>" % slug


def rewrite_links(html, is_home_partial):
    def repl(m):
        href = m.group(1)
        mapped = map_internal(href, is_home_partial)
        if mapped is None:
            return m.group(0)
        return 'href="%s"' % mapped

    return re.sub(r'href="([^"]*)"', repl, html)


def build():
    os.makedirs(OUT, exist_ok=True)
    count = 0
    for base, stem in PAGES.items():
        is_home = (base == 'home')
        for lang in LANGS:
            src_file = os.path.join(SRC, '%s_lang=%s.html' % (stem, lang))
            if not os.path.exists(src_file):
                print('  MISSING:', src_file)
                continue
            with open(src_file, encoding='utf-8') as fh:
                html = fh.read()
            body = extract_body(html)
            body = rewrite_assets(body)
            body = rewrite_links(body, is_home)
            header = ("<?php\n"
                      "/**\n"
                      " * Content partial: %s (%s). Auto-generated from the static export.\n"
                      " *\n"
                      " * @package Ferroxa\n"
                      " */\n"
                      "if ( ! defined( 'ABSPATH' ) ) { exit; }\n"
                      "?>\n") % (base, lang)
            out_file = os.path.join(OUT, '%s-%s.php' % (base, lang))
            with open(out_file, 'w', encoding='utf-8') as fh:
                fh.write(header + body + '\n')
            count += 1
    print('Wrote %d partials to %s' % (count, OUT))


if __name__ == '__main__':
    build()
