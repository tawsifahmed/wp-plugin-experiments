<?php
/*
* Plugin Name: Geo Store Locator
* Author: Tawsif Ahmed Riyad
* Description: Store Locator for Sample projects
* Version: 1.0
* Text Domain: ex-store-locator
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}



// including custom framework
require_once plugin_dir_path(__FILE__) . 'libs/codestar-framework/codestar-framework.php';

require_once plugin_dir_path(__FILE__) . 'inc/codestar-framework.php';

// posts
require_once plugin_dir_path(__FILE__) . 'inc/custom-posts.php';

// shortcodes
require_once plugin_dir_path(__FILE__) . 'inc/shortcodes.php';


// include css and js from assets folder
function geo_store_locator_assets() {
  wp_enqueue_style( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.css', null, '1.0.0' );
  wp_enqueue_script( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.js', [], '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'geo_store_locator_assets' );