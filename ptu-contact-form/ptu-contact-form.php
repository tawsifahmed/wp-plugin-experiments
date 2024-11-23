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
    <div class="ptu-contact-form" style="width: 90%; margin: 0 auto;">
    <form method="post" style="display: flex; flex-direction: column;">
        <label for="first_name">First Name</label>
        <input style="padding: 0 0 20px 0;" type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input style="padding: 0 0 20px 0;" type="text" id="last_name" name="last_name" required>

        <label for="subject">Subject</label>
        <input style="padding: 0 0 20px 0;" type="text" id="subject" name="subject" required>

        <label for="email">Email</label>
        <input style="padding: 0 0 20px 0;" type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea style="padding: 0 0 30px 0;" id="message" name="message" required></textarea>

        <button type="submit" name="ptu_contact_form_submit" 
        style="text-decoration: none;
            background: crimson;
            border: none;
            padding: 10px;
            border-radius: 5px;
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