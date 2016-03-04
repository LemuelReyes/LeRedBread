<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// change custom login logo

function custom_login_logo() {
	echo '<style type="text/css">
						h1 a { background-image:url('.get_template_directory_uri().'/images/lrb-logo.svg) !important;
						background-size: contain !important;
						width: 100% !important;
						}
				</style>';
}

add_action('login_head', 'custom_login_logo');


// point to a different url

function custom_login_url() {
	return home_url();
}

add_filter( 'login_headerurl', 'custom_login_url');
