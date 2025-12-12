## Project overview
- This repository is a custom WordPress theme (`kpkreklama-theme-structured`).
- PHP templates live in the repo root (`front-page.php`, `single.php`, `template-*.php`, etc.).
- Theme bootstrap and helpers are in `functions.php` (assets enqueue, helpers like `kpk_asset()`, forms, customizer settings).
- CSS is split into structured files under `assets/css/` and enqueued from `functions.php`:
  - `assets/css/base.css` (tokens, resets)
  - `assets/css/layout.css` (layout, header/nav/footer, figures)
  - `assets/css/components.css` (buttons/cards/forms, lightbox, etc.)
  - `assets/css/utilities.css` (utility classes)
  - `assets/css/home.css` (home-specific tweaks)
- JS is currently inline in `footer.php` (slider + lightbox behavior).

## Build and test commands
- No build step is required (no bundler/node pipeline in this repo).
- Optional sanity checks:
  - `git status -sb`
  - `git diff`

## Code style guidelines
- PHP:
  - Prefer WordPress conventions: escape late (`esc_html`, `esc_attr`, `esc_url`), sanitize early (`sanitize_text_field`, `sanitize_email`, etc.).
  - Keep templates mostly presentation; put reusable logic/helpers in `functions.php`.
  - Use translation functions for strings: `__()`, `_e()`, `esc_html__()`, etc. (text domain: `kpk`).
- HTML/CSS:
  - Prefer classes and shared components over inline styles (existing inline styles exist—avoid adding more if possible).
  - Keep CSS changes in the appropriate layer (`base`/`layout`/`components`/`utilities`/`home`) and reuse CSS variables.
  - Prefer real `<img>` elements (with `loading="lazy"` and proper `alt`) over `background-image` for content images.
- JS:
  - Keep behavior accessible (keyboard support, ARIA where relevant).
  - If adding more JS, consider moving inline scripts to an enqueued file to improve cacheability.

## Testing instructions
- Manual checks in a local WordPress environment:
  - Activate the theme in WP Admin.
  - Verify header/nav on mobile/desktop (burger open/close, submenu behavior).
  - Verify key templates: Home (`front-page.php`), product templates (`template-*.php`), blog listing (`home.php`/`archive.php`/`category.php`), single post (`single.php`), contact (`template-kontakt.php`).
  - Check images load and crop correctly (cards/figures, galleries/lightbox).
  - Check forms:
    - Validation and success/error notice UI.
    - reCAPTCHA token injection (if keys are set).
    - Redirect back with status query params (where applicable).
  - Responsive layout at ~900px and ~640px breakpoints.

## Security considerations
- Treat all user input as untrusted:
  - Always validate nonces (`wp_nonce_field` + server-side checks).
  - Sanitize incoming fields (`sanitize_text_field`, `sanitize_email`, etc.).
  - Escape output appropriately (`esc_html`, `esc_attr`, `esc_url`).
- reCAPTCHA:
  - Do not commit secret keys; prefer constants in `wp-config.php` (the theme supports this).
- Forms and email:
  - Keep honeypot/anti-spam checks enabled.
  - Consider rate limiting/throttling at the server/WAF level if forms are public.
- External URLs:
  - Minimize hardcoded external asset URLs in templates; prefer WP Media or local `assets/` + `kpk_asset()`.
  - For `target="_blank"` links, keep `rel="noopener"` (already used in places—continue consistently).
