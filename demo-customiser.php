<?php

/*
  Plugin Name: Demo Customiser
  Plugin URI:
  Description: MU (must-use) plugin to customise demo sites for Indian languages on demo.wpindia.org
  Version: 0.1
  Author: saurabhshukla,
  Author URI: http://github.com/yapapaya/
  Text Domain: wpin-dc
  Domain Path: /languages
  License: GNU General Public License v2 or later
 */

/*
 * Features:
 * 1. Filter footer to add sponsor credits
 * 2. Add a default post for different languages
 * 3. (Maybe) add a default comment on this post 
 * 
 * others may be added later
 */

/**
 * Plugin's file path
 */
define( 'WPIN_DC_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin's url path
 */
define( 'WPIN_DC_URL', plugin_dir_url( __FILE__ ) );

// initialise translations
add_action( 'plugins_loaded', 'wpin_dc_localise' );

/**
 * Localises the plugin
 * 
 * @since 0.1
 */
function wpin_dc_localise() {
	load_plugin_textdomain(
		'wpin-dc', false, WPIN_DC_PATH . '/languages'
	);
}

// modify theme footer
add_action( 'wp_footer', 'wpin_dc_theme_footer' );

/**
 * Adds sponsor credits to theme footer
 * 
 * @since 0.1
 */
function wpin_dc_theme_footer() {
	include_once WPIN_DC_PATH . 'templates/theme-footer.php';
}
