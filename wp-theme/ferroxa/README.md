# Ferroxa WordPress Theme

A self-contained, multilingual (English / Arabic / French) WordPress theme for
**Ferroxa Global Pte Ltd**. It is a faithful conversion of the original static
Ferroxa site — same design, same sections, same assets — rebuilt as a proper
WordPress theme with **server-side translation that works out of the box**.

No translation plugin (WPML / Polylang) is required.

## Highlights

- **Built-in multilingual system** — EN / AR / FR. Language is chosen with the
  header language switcher and persisted in a cookie.
- **Automatic RTL** for Arabic (loads `assets/css/rtl.css` and sets `dir="rtl"`).
- **Identical design** — all original CSS/JS/images/video are reused verbatim.
- **Auto-setup** — on activation the theme creates all required pages
  (Home, About, Products, Contact, Blog, and the 6 product pages), assigns the
  correct page templates, and sets Home as the front page.

## Installation

1. Zip the `ferroxa` folder (the one containing `style.css`).
2. In WordPress: **Appearance → Themes → Add New → Upload Theme** → choose the zip.
3. Click **Activate**. The theme auto-creates the pages and sets the homepage.
4. Visit the site. Use the globe icon in the header to switch language.

> If you ever need to re-run the page setup, deactivate and reactivate the theme.

## How translation works

- The active language comes from `?lang=en|ar|fr` (then a cookie, default `en`).
- The language switcher links point to the **current page** with `?lang=` set,
  so switching simply reloads the same page in the new language — no separate
  URLs or duplicate posts to manage.
- Shared chrome (navigation + footer) is translated via `inc/lang.php`.
- Page body content lives in `parts/{page}-{lang}.php`, one file per language,
  extracted from the original translated pages.

## Structure

```
ferroxa/
├── style.css                 WordPress theme header
├── functions.php             setup, asset enqueue, language engine, auto-pages
├── header.php                <head> + translated navigation + language switcher
├── footer.php                translated footer
├── front-page.php            Home
├── index.php                 fallback
├── page-about.php            About            (Template: Ferroxa About)
├── page-products.php         Products         (Template: Ferroxa Products)
├── page-contact.php          Contact          (Template: Ferroxa Contact)
├── page-blog.php             Blog             (Template: Ferroxa Blog)
├── template-product-*.php    6 product pages  (Template: Ferroxa Product - …)
├── inc/lang.php              nav/footer/UI translation strings
├── parts/{page}-{en,ar,fr}.php   per-language page content
└── assets/                   css / js / images / videos (from original site)
```

## Notes / next steps

- **Contact form**: the markup matches the original (which also did not send
  email on its own). To make it send to `sales@ferroxa.com`, install a form
  plugin (WPForms or Contact Form 7) and drop its shortcode into the contact
  content partials, or wire up an admin-post handler.
- **Blog**: a styled static blog page is included to match the design. To use
  WordPress's native blog, point the nav "Blog" link to a Posts page instead.
- **Editing text**: navigation/footer text → `inc/lang.php`; page content →
  the matching file in `parts/`.

---

The content partials were generated from the static export with
`../build_partials.py` (kept in the repo for reference; not part of the theme).
