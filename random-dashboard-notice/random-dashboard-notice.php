<?php

/*
* Plugin Name: Random Dashboard Notice
* Description: A simple plugin to show a random dashboard notice
* Version: Demo
* Author: Tawsif Ahmed Riyad

*/


// add_action( 'admin_notices', 'hello_wordpress_dashboard' );
// function hello_wordpress_dashboard() {
// 	echo '<div class="notice notice-success is-dismissible">';
// 	echo '<p>Hello WordPress!</p>';
// 	echo '</div>';
// }


 //https://developer.wordpress.org/reference/hooks/the_content/
 
add_filter( 'the_content', 'hello_wordpress_dashboard' );
function hello_wordpress_dashboard( $content ) {
	$content .= '<p>Hello WordPress!</p>';

	return $content;
}

// https://developer.wordpress.org/plugins/http-api/

add_action( 'admin_notices', 'dynamic_wordpress_joke_notice' );
function dynamic_wordpress_joke_notice() {
	$response      = wp_remote_get( 'https://v2.jokeapi.dev/joke/Pun?blacklistFlags=nsfw,religious,political,racist,sexist,explicit&type=single' );
	$body          = wp_remote_retrieve_body( $response );
	$content_array = json_decode( $body, true );

	echo '<div class="notice notice-success is-dismissible">';
	echo '<p>' . $content_array['joke'] . '</p>';
	echo '</div>';
    // shown in plugins page
}