<?php
/**
 * Custom CSS
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */

function twenty_twenty_one_generate_css( $selector, $style, $value, $prefix = '', $suffix = '', $display = true ) {

	if ( ! $value || ! $selector ) {
		return '';
	}

	$css = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );
	if ( $display ) {
		echo wp_strip_all_tags( $css );
	}
	return $css;
}
