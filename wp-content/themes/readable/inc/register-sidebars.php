<?php
/**
 * Register sidebars for Readable
 *
 * @package Readable
 */

function add_my_sidebars() {
	// blog sidebar
	register_sidebar(
		array(
			'name'          => _x( 'Blog Sidebar', 'backend', 'readable_wp' ),
			'id'            => 'blog-sidebar',
			'description'   => _x( 'Sidebar on the blog layout.', 'backend', 'readable_wp' ),
			'class'         => 'blog sidebar',
			'before_widget' => '<div class="%2$s  push-down-30">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6><hr>'
		)
	);


	// author widget sidebar
	register_sidebar(
		array(
			'name'          => _x( 'Author Sidebar', 'backend', 'readable_wp' ),
			'id'            => 'author-sidebar',
			'description'   => _x( 'Sidebar for the Author Widget, shown just above the Blog Sidebar.', 'backend', 'readable_wp' ),
			'before_widget' => '<div class="%2$s  boxed  push-down-30">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		)
	);

	// regular page
	register_sidebar(
		array(
			'name'          => _x( 'Regular Page Sidebar', 'backend', 'readable_wp' ),
			'id'            => 'regular-page-sidebar',
			'description'   => _x( 'Sidebar on the regular page.', 'backend', 'readable_wp' ),
			'class'         => 'sidebar',
			'before_widget' => '<div class="%2$s  push-down-30">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6><hr>'
		)
	);

	// woocommerce shop sidebar
	if ( is_woocommerce_active() ) {
		register_sidebar(
			array(
				'name'          => _x( 'Shop Sidebar', 'backend', 'readable_wp'),
				'id'            => 'shop-sidebar',
				'description'   => _x( 'Sidebar for the shop page.', 'backend', 'readable_wp'),
				'class'         => 'left sidebar',
				'before_widget' => '<div class="%2$s  push-down-30">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6><hr>'
			)
		);
	}

	// footer
	register_sidebar(
		array(
			'name'          => _x( 'Footer', 'backend', 'readable_wp' ),
			'id'            => 'footer-sidebar-top',
			'description'   => _x( 'Footer area accepts 4 widgets.', 'backend', 'readable_wp' ),
			'before_widget' => '<div class="col-xs-12  col-md-3  push-down-30"><div class="%2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6><hr>'
		)
	);
}
add_action( "widgets_init", "add_my_sidebars" );