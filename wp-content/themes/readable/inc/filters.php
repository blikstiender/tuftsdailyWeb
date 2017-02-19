<?php
/**
 * Filters for Readable WP theme
 *
 * @package Readable
 */



/**
 * Change excerpt length
 */
function readable_excerpt_length( $length ) {
	return 40;
}
// add_filter( 'excerpt_length', 'readable_excerpt_length', 999 );



/**
 * Add shortcodes in widgets
 */
add_filter( 'widget_text', 'do_shortcode' );



/**
 * Remove the gallery inline styling
 */
// add_filter( 'use_default_gallery_style', '__return_false' );


function add_disabled_editor_buttons($buttons) {
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'hr';

	return $buttons;
}
add_filter('mce_buttons', 'add_disabled_editor_buttons');



/**
 * Custom tag font size
 */
function set_tag_cloud_sizes($args) {
	$args['smallest'] = 8;
	$args['largest'] = 12;
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'set_tag_cloud_sizes' );


/**
 * Jetpack share icons moved to custom location
 */
function jptweak_remove_share() {
		remove_filter( 'the_content', 'sharing_display', 19 );
		remove_filter( 'the_excerpt', 'sharing_display', 19 );
		if ( class_exists( 'Jetpack_Likes' ) ) {
				remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
		}
}
add_action( 'loop_start', 'jptweak_remove_share' );


/**
 * Custom text after excerpt
 */
function readable_excerpt_more( $more ) {
	return _x( ' ...', 'custom read more text after the post excerpts' , 'readable_wp');
}
add_filter('excerpt_more', 'readable_excerpt_more');