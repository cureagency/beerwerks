<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Beerwerks
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function beerwerks_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'beerwerks_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function beerwerks_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'beerwerks_pingback_header' );

// // Method 1: Filter.
// function my_acf_google_map_api( $api ){
//     $api['key'] = 'AIzaSyBzyOu7LZfkLOnYkCVO4gpln9kKO0TYpfs';
//     return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// // Method 2: Setting.
// function my_acf_init() {
//     acf_update_setting('google_api_key', 'AIzaSyBzyOu7LZfkLOnYkCVO4gpln9kKO0TYpfs');
// }
// add_action('acf/init', 'my_acf_init');