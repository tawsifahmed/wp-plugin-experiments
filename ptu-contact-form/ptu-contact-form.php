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
    ?>
    <div class="ptu-contact-form" style="width: 90%; margin: 0 auto; max-width: 650px; background: #d9d9d9; padding: 20px; border-radius: 7px;">
    <form method="post" style="display: flex; flex-direction: column;">
        <label for="first_name">First Name</label>
        <input style="padding: 0 0 20px 0;" type="text" id="first_name" name="first_name" required>

        <label for="last_name" style="margin-top: 15px">Last Name</label>
        <input style="padding: 0 0 20px 0;" type="text" id="last_name" name="last_name" required>

        <label for="subject" style="margin-top: 15px">Subject</label>
        <input style="padding: 0 0 20px 0;" type="text" id="subject" name="subject" required>

        <label for="email" style="margin-top: 15px">Email</label>
        <input style="padding: 0 0 20px 0;" type="email" id="email" name="email" required>

        <label for="message" style="margin-top: 15px">Message</label>
        <textarea style="padding: 0 0 30px 0;" id="message" name="message" required></textarea>

        <?php 
        wp_nonce_field( 'ptu_contact_form_nonce' );
        ?>

        <button type="submit" name="ptu_contact_form_submit" 
        style="text-decoration: none;
            background: crimson;
            border: none;
            padding: 10px;
            border-radius: 7px;
            color: white;
            font-weight: 700;
            font-size: medium;
            margin-top: 17px;"
        >Submit</button>
        <small>* All fields are required.</small>
    </form>
    </div>
    <?php
    return ob_get_clean();
}

add_action( 'wp', 'ptu__contact_handle_submission');

function ptu__contact_handle_submission() {
    if ( ! isset( $_POST['ptu_contact_form_submit'] ) ) {
        return;
    }

    if( ! wp_verify_nonce( $_POST['_wpnonce'], 'ptu_contact_form_nonce' ) ) {
        return;
    }

    add_action('the_content', 'ptu_print_form_data');
}

function ptu_print_form_data( $content ) {
    $first_name = isset( $_POST['first_name'] ) ? sanitize_text_field( $_POST['first_name'] ) : '';
    $last_name  = isset( $_POST['last_name'] ) ? sanitize_text_field( $_POST['last_name'] ) : '';
    $subject    = isset( $_POST['subject'] ) ? sanitize_text_field( $_POST['subject'] ) : '';
    $email      = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
    $message    = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

    $post_id = wp_insert_post( [
        'post_title' => 'Form submission - ' . $subject,
        'post_content' => $message,
        'post_status' => 'publish',
        'post_type' => 'ptu-form-entry',
        'meta_input' => [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
        ],
    ] );

    $data = '<div class="ptu-contact-form" style="color: green; background: #F2FBF2DB;">';
    $data .= '<h2>Thank you for your message!</h2>';

    if( $post_id ){
        $data .= '<p>Form entry saved successfully.</p>';
    }

    $data .= '<p><strong>First Name:</strong> ' . $first_name . '</p>';
    $data .= '<p><strong>Last Name:</strong> ' . $last_name . '</p>';
    $data .= '<p><strong>Subject:</strong> ' . $subject . '</p>';
    $data .= '<p><strong>Email:</strong> ' . $email . '</p>';
    $data .= '<p><strong>Message:</strong> ' . $message . '</p>';
    $data .= '</div>';

    return $data . $content;
}

add_action( 'init', 'ptu_contact_register_post_type' );

function ptu_contact_register_post_type() {
    // https://developer.wordpress.org/reference/functions/register_post_type/
    register_post_type( 'ptu-form-entry', [
        'labels' => [
            'name' => 'PTU Contact Form Entries',
            'singular_name' => 'PTU Contact Form Entry',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => [ 'title', 'editor', 'custom-fields' ],
    ] );
}
