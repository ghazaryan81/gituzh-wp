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

 function define_global_vars() {
  global $TEMPLATE_PATH;
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
 }
 add_action('after_setup_theme', 'define_global_vars');

 function clear_nav_menu_item_id($id, $item, $args) {
  return "";
 }
 add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

/*
function clear_nav_menu_item_class($classes, $item, $args) {
  return array("menu_li");
 }
 add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
 */
?>