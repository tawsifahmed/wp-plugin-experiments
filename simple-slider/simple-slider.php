<?php

/*
* Plugin Name: Simple Slider
* Author: Tawsif Ahmed Riyad
* Description: A simple slider plugin
* Version: 1.0
*/ 


function simpleSlider_register_cpt(){
    $labels = [
        'name' => 'Simple Slider',
        'singular_name' => 'Simple Slider',
    ];

    $args = [
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
    ];

    register_post_type('simple-slider', $args);
}

add_action('init', 'simpleSlider_register_cpt');