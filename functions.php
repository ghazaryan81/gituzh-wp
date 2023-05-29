<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */
?>
<?php

 function gituzh_widgets_init() {
  register_sidebar(); 
 }
 add_action( 'widgets_init', 'gituzh_widgets_init' );

 function add_featured_image_support_to_your_wordpress_theme() {
  add_theme_support('post-thumbnails');
 }

 add_action('after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme');

function jltwp_adminify_remove_dashicons() {
    if (!is_admin_bar_showing() && !is_customize_preview()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
}

add_action('wp_print_styles', 'jltwp_adminify_remove_dashicons', 100);

function change_default_jquery( &$scripts){
    if(!is_user_logged_in()){
        $scripts->remove( 'jquery');
        // $scripts->add( 'jquery', false, array( 'jquery-core', "jquery-core-js" ), '1.10.2' );
    }
}

add_filter( 'wp_default_scripts', 'change_default_jquery' );


// function jpen_register_example_widget() { 
//   register_widget( 'jpen_Example_Widget' );
// }
// add_action( 'widgets_init', 'jpen_register_example_widget' );


/*  function define_global_vars() {
  global $TEMPLATE_PATH;
  global $HOME_PAGE;
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
 }
 add_action('after_setup_theme', 'define_global_vars'); */

/*  function clear_nav_menu_item_id($id, $item, $args) {
  return "";
 }
 add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3); */

/*
function clear_nav_menu_item_class($classes, $item, $args) {
  return array("menu_li");
 }
 add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
 */
?>