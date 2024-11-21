<?php

/*
* Plugin Name: Demo Slider
* Author: Tawsif Ahmed Riyad
* Description: A simple slider plugin
* Version: 1.0
*/ 


function demoSlider_register_cpt(){
    $labels = [
        'name' => 'Demo Slider',
        'singular_name' => 'Demo Slider',
    ];

    $args = [
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
    ];

    register_post_type('demo-slider', $args);
}

add_action('init', 'demoSlider_register_cpt');


function demoSlider_shortcode(){
    $args = [
        'post_type' => 'demo-slider',
        'posts_per_page' => -1,
    ];

    $query = new WP_Query($args);

    $html = '<div class="demo-slider">';

    while($query->have_posts()) : $query->the_post();
    $html .= '<h2>'.get_the_title().'</h2>';

    endwhile; wp_reset_query();

    $html .= '</div>';

    return $html;
}

add_shortcode('demo_slider', 'demoSlider_shortcode');