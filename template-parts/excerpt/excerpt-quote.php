<?php
/**
 * Show the appropriate content for the Quote post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */

$content = get_the_content();

if ( has_block( 'core/quote', $content ) ) {
	twenty_twenty_one_print_first_instance_of_block( 'core/quote', $content );
} elseif ( has_block( 'core/pullquote', $content ) ) {
	twenty_twenty_one_print_first_instance_of_block( 'core/pullquote', $content );
} else {
	the_excerpt();
}
