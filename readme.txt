=== Plugin Name ===
Contributors: millertchris
Donate link: https://millertchris.com/
Tags: portfolio, post
Requires at least: 4.7
Tested up to: 5.6
Stable tag: 4.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A custom post type for WordPress that allows you to add portfolio pieces to your site.

== Description ==

This plugin creates a WordPress custom post type and leverages ACF (Advanced Custom Fields) so you'll need to have it installed.

1. Upload `cpt-portfolio.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Grab some coffee ☕

== Changelog ==

= 1.1 =
- Included the `acf-fields.json` so you can import em' and change em' 🎉 
- Added support for `acf_add_local_field_group` to set/add ACF fields
- If the field group has been imported, the local field group will not run
- Unset the "Gallery" field if ACF PRO is not installed
- Display an error message is ACF is not installed
- Added support for plugin updates via GitHub

= 1.0 =
- Used `register_post_type` to create the portfolio post type