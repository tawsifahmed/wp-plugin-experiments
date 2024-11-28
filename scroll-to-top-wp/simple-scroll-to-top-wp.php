<?php
/**
 * Plugin Name:       Scroll To Top WP
 * Description:       Scroll to top plugin feature in WordPress project
 * Version:           1.0.0
 * Author:            Tawsif Ahmed Riyad
 * Author URI:        https://github.com/tawsifahmed
 * Update URI:        https://github.com/tawsifahmed
 * Text Domain:       scroll
 */

function scroll_enqueue_style(){
    wp_enqueue_style('scroll-style', plugins_url('css/scroll-style.css', __FILE__));
}
add_action("wp_enqueue_scripts", "scroll_enqueue_style");

function scroll_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('scroll-plugin-script', plugins_url('js/scroll-plugin.js', __FILE__), array(), '1.0.0', true);
}
add_action("wp_enqueue_scripts", "scroll_enqueue_scripts");

// jQuery Plugin Setting Activation
function scroll_scroll_script(){ ?>
    <script>
        jQuery(document).ready(function () {
            jQuery.scrollUp();
        });
    </script>
<?php }
add_action("wp_footer", "scroll_scroll_script");

// customization Settings
function scroll_to_top($wp_customize){

    // section
    $wp_customize->add_section('scroll_top_section', array(
        'title'       => __('Scroll To Top', 'scroll'), // Ensure the correct text domain 'scroll'
        'description' => __('Scroll to top plugin feature in WordPress project.', 'scroll'),
        'priority'    => 160, // Ensure priority so it appears in a visible position
    ));

    // bg color
    $wp_customize->add_setting('scroll_default_color', array(
        'default'     => '#000000',
        'transport'   => 'refresh',
    ));
    // control for bg color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'scroll_default_color', array(
        'label'    => __('Background Color', 'scroll'),
        'section'  => 'scroll_top_section',
        'settings' => 'scroll_default_color',
    )));

    // setting for rounded corner
    $wp_customize->add_setting('scroll_rounded_corner', array(
        'default'     => '5px',
        'transport'   => 'refresh',
    ));
    // control for rounded corner
    $wp_customize->add_control('scroll_rounded_corner', array(
        'label'    => __('Rounded Corner', 'scroll'),
        'section'  => 'scroll_top_section',
        'type'     => 'text',
    ));
}
add_action("customize_register", "scroll_to_top");
