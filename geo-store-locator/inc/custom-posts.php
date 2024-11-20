<?php
add_action( 'init', 'geo_store_locator_custom_post' );
function geo_store_locator_custom_post() {
    register_post_type( 'geo-store-map', [
        'labels' => [
            'name' => __( 'Store Maps' )
        ],
        'public' => false,
        'show_ui' => true,
        'supports' => ['title'],
    ]);
}