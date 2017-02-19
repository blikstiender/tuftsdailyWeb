<?php
/**
 * Meta Boxes for various data
 *
 * @package Readable
 */


add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {
	if ( ! function_exists( 'ot_register_meta_box' ) ) {
		return;
	}

	// default array of data
	$default = array(
		'id'       => 'readable_options',
		'title'    => _x( 'Readable Options', 'backend', 'readable_wp' ),
		'desc'     => _x( 'Options specific to Readable theme', 'backend', 'readable_wp' ),
		'pages'    => array(),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array()
	);

	// page
	$meta_box_data = array_replace_recursive( $default, array(
		'pages'  => array( 'page' ),
		'fields' => array(
			array(
				'id'      => 'sidebar_position',
				'label'   => _x( 'Position of the sidebar', 'backend', 'readable_wp' ),
				'desc'    => _x( 'Position the sidebar for this particular page to the left, right or do not display it at all.', 'backend', 'readable_wp' ),
				'std'     => 'right',
				'type'    => 'radio',
				'class'   => '',
				'choices' => array(
					array(
						'value' => 'right',
						'label' => _x( 'Right', 'backend', 'readable_wp' )
					),
					array(
						'value' => 'left',
						'label' => _x( 'Left', 'backend', 'readable_wp' )
					),
					array(
						'value' => 'no',
						'label' => _x( 'No sidebar', 'backend', 'readable_wp' )
					),
				)
			),
			array(
				'id'      => 'exclude_authors',
				'label'   => _x( 'Exlude Authors IDs', 'backend', 'readable_wp' ),
				'desc'    => _x( 'This only applies for the template <strong>About us page</strong>, list of the author ID separated by a comma to be excluded on the About us page. Example: <code>5,11,23</code>.', 'backend', 'readable_wp' ),
				'std'     => '',
				'type'    => 'text'
			)
		)
	));
	ot_register_meta_box( $meta_box_data );


	// post/single
	$meta_box_data = array_replace_recursive( $default, array(
		'pages'    => array( 'post' ),
		'fields'   => array(
			array(
				'id'      => 'sidebar_position',
				'label'   => _x( 'Position of the sidebar', 'backend', 'readable_wp' ),
				'desc'    => _x( 'Position the sidebar for this particular post to the left, right or do not display it at all.', 'backend', 'readable_wp' ),
				'std'     => 'as_blog',
				'type'    => 'radio',
				'class'   => '',
				'choices' => array(
					array(
						'value' => 'as_blog',
						'label' => _x( 'Default (the same as blog layout)', 'backend', 'readable_wp' )
					),
					array(
						'value' => 'right',
						'label' => _x( 'Right', 'backend', 'readable_wp' )
					),
					array(
						'value' => 'left',
						'label' => _x( 'Left', 'backend', 'readable_wp' )
					),
					array(
						'value' => 'no',
						'label' => _x( 'No sidebar', 'backend', 'readable_wp' )
					),
				)
			),
		)
	));
	ot_register_meta_box( $meta_box_data );


	// slider
	$meta_box_data = array(
		'id'       => 'slider_options',
		'title'    => _x( 'Slider Options', 'backend', 'readable_wp'),
		'desc'     => '',
		'pages'    => array( 'slider' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'id'      => 'slider_subtitle',
				'label'   => _x( 'Smaller text above the title of the slide', 'backend', 'readable_wp'),
				'desc'    => '',
				'std'     => '',
				'type'    => 'text',
			),
		)
	);
	ot_register_meta_box( $meta_box_data );


	// team
	$my_meta_box = array(
		'id'       => 'team_options',
		'title'    => _x( 'Readable Options', 'backend', 'readable_wp'),
		'desc'     => _x( 'Options specific to Readable theme', 'backend', 'readable_wp'),
		'pages'    => array( 'team' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'id'    => 'subtitle',
				'label' => _x( 'Subtitle', 'backend', 'readable_wp'),
				'desc'  => _x( 'Subtitle of this team member (shown right below the name).', 'backend', 'readable_wp'),
				'std'   => '',
				'type'  => 'text',
			),
		)
	);
	ot_register_meta_box( $my_meta_box );
}