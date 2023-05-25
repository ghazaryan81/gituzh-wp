<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */

if ( has_block( 'core/paragraph', get_the_content() ) ) {
	twenty_twenty_one_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 );
} else {
	the_excerpt();
}
