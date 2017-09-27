<?php

/*
  Plugin Name: Demo Customiser
  Plugin URI:
  Description: MU (must-use) plugin to customise demo sites for Indian languages on demo.wpindia.org
  Version: 0.1
  Author: saurabhshukla,
  Author URI: http://github.com/yapapaya/
  Text Domain: wpindia-demo
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
define( 'WPIN_DEMO_CUSTOMISER_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin's url path
 */
define( 'WPIN_DEMO_CUSTOMISER_URL', plugin_dir_url( __FILE__ ) );