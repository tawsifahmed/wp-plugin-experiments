<?php

/*
* Plugin Name:       PTU Contact Form
* Description:       A simple contact form plugin for practice purpose.
* Version:           1.0.0
* Author:            Tawsif Ahmed Riyad
* Plugin URI:        https://github.com/tawsifahmed//wp-plugin-experiments/tree/main/ptu-contact-form
* Requires at least: 5.2
* Requires PHP:      8.0
* Text Domain:       ptu-contact-form
*
* @package           ptu-contact-form
*/


// here 'ABSPATH' is a constant that is defined in wp core directory (wp-config.php), so we can use it to prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}


add_shortcode('ptu_contact_form', 'ptu_contact_form_shortcode');

function ptu_contact_form_shortcode(){
    ob_start();
    echo '<div class="ptu-contact-form">Hello</div>';
    return ob_get_clean();
}