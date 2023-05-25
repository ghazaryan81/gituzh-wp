<?php
/**
 * Back compat functionality
 *
 * Prevents the theme from running on WordPress versions prior to 5.3,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.3.
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */

function twenty_twenty_one_switch_theme() {
	add_action( 'admin_notices', 'twenty_twenty_one_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twenty_twenty_one_switch_theme' );

function twenty_twenty_one_upgrade_notice() {
	echo '<div class="error"><p>';
	printf(
		esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'twentytwentyone' ),
		esc_html( $GLOBALS['wp_version'] )
	);
	echo '</p></div>';
}

function twenty_twenty_one_customize() {
	wp_die(
		sprintf(
			esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'twentytwentyone' ),
			esc_html( $GLOBALS['wp_version'] )
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twenty_twenty_one_customize' );

function twenty_twenty_one_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die(
			sprintf(
				esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'twentytwentyone' ),
				esc_html( $GLOBALS['wp_version'] )
			)
		);
	}
}
add_action( 'template_redirect', 'twenty_twenty_one_preview' );
