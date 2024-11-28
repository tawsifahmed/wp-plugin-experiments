<?php
/**
 * Plugin Name:       Scroll To Top WP
 * Description:       Scroll to top plugin feature in pages
 * Version:           1.0.0
 * Author:            Tawsif Ahmed Riyad
 * Author URI:        https://github.com/tawsifahmed
 * Update URI:        https://github.com/tawsifahmed
 * Text Domain:       scroll
 */



  function scroll_enqueue_style(){
    wp_enqueue_style('scroll-style', plugins_url('css/scroll-style.css', __FILE__));
  }
  add_action( "wp_enqueue_scripts", "scroll_enqueue_style" );


  function scroll_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('scroll-plugin-script', plugins_url('js/scroll-plugin.js', __FILE__), array(), '1.0.0', 'true');
  }
  add_action( "wp_enqueue_scripts", "scroll_enqueue_scripts" );

  // jQuery Plugin Setting Activation
  function scroll_scroll_script(){?>
<script>
jQuery(document).ready(function () {
  jQuery.scrollUp();
});
</script>
<?php }
add_action( "wp_footer", "scroll_scroll_script" );


?>