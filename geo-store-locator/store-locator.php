<?php

/*
Plugin Name: Geo Store Locator
Author: Tawsif Ahmed Riyad
Text Domain: ex-store-locator
*/





// including custom framework
require_once plugin_dir_path(__FILE__) . 'libs/codestar-framework/codestar-framework.php';
require_once plugin_dir_path(__FILE__) . 'inc/codestar-framework.php';
require_once plugin_dir_path(__FILE__) . 'inc/custom-posts.php';
require_once plugin_dir_path(__FILE__) . 'inc/shortcodes.php';

function geo_store_locator_assets() {
  // css
  // wp_enqueue_style( 'gff-store-locator', plugin_dir_url( __FILE__ ) . 'assets/css/gff-store-locator.css', null, '1.0.0' );
  
  // js
  wp_enqueue_style( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.css', null, '1.0.0' );
  wp_enqueue_script( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.js', [], '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'gff_store_locator_assets' );