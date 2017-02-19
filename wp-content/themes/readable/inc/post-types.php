<?php
/**
 * Register custom post types
 *
 * @package Readable
 */


function readable_custom_post_types() {
	// slider
	$labels = array(
		'name'               => _x( 'Slider', 'backend', 'readable_wp'),
		'singular_name'      => _x( 'Slide', 'backend', 'readable_wp'),
		'add_new'            => _x( 'Add New', 'backend', 'readable_wp'),
		'add_new_item'       => _x( 'Add New Slide', 'backend', 'readable_wp'),
		'edit_item'          => _x( 'Edit Slide', 'backend', 'readable_wp'),
		'new_item'           => _x( 'New Slide', 'backend', 'readable_wp'),
		'all_items'          => _x( 'All Slides', 'backend', 'readable_wp'),
		'view_item'          => _x( 'View Slide', 'backend', 'readable_wp'),
		'search_items'       => _x( 'Search Slides', 'backend', 'readable_wp'),
		'not_found'          => _x( 'No slides found', 'backend', 'readable_wp'),
		'not_found_in_trash' => _x( 'No slides found in Trash', 'backend', 'readable_wp'),
		'menu_name'          => _x( 'Slider', 'backend', 'readable_wp'),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
	);
	// register_post_type( 'slider', $args );
}
add_action( 'init', 'readable_custom_post_types' );
