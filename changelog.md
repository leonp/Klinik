# Changelog

## 0.51 2014-01-12

- Reallowed WP to inject `style` in `head` (so we can use custom backgrounds)
- Styled vertical link lists
- `display: none` applied to `cat-list li` to get rid of non cat lists in `wp_list_categories`

## 0.5 2014-01-12

- Site header layout changes. Widescreen shows full menu.
- Header extends across whole screen width
- Removed reference to favicon in `header.php`
- Removed `bleed` images as no margin to bleed into

## 0.42 2013-12-30

- Site header layout changes. Navicon performs better in Android Firefox.
- Made link blue contrast with black higher
- Changed hover/active/focus effect to underline
- Added `responsive-nav` options to `footer.php` rather than separate `js` file

## 0.41 2013-12-30

- Added right padding to `#nav-toggle` to fix bug in Android Firefox where touching the navicon didn't evoke the navigation menu.

## 0.4 2013-12-29

- Added custom background (default `#CFCFCF`)
- Added custom header. The custom header image is the logo.
- Cleaned up `archive.php`, removing all references to Scherzo
- Added responsive nav

## 0.3 2013-12-24

- Imported Open Sans from Google Fonts (see pluggable `klinik_theme_styles` function in `functions.php`
- All fonts now Open Sans
- Typographic changes to incorporate Open Sans

## 0.2 2013-12-21

- Changed font stack to `georgia, serif`
- Changed heading and secondary font stack to `'Nimbus Sans L', 'Helvetica Neue', arial, sans-serif`
- Reduced widescreen `.wrapper` width to 30em
- Changed bleed to full bleed, not just into left margin