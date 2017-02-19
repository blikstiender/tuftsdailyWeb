<?php
/**
 * Contains methods for customizing the theme customization screen.
 *
 * @package Readable
 * @link http://codex.wordpress.org/Theme_Customization_API
 */
class Readable_Customize {

	/**
	* This hooks into 'customize_register' (available as of WP 3.4) and allows
	* you to add new sections and controls to the Theme Customize screen.
	*
	* Note: To enable instant preview, we have to actually write a bit of custom
	* javascript. See live_preview() for more.
	*
	* @see add_action('customize_register',$func)
	*/
	public static function register ( $wp_customize ) {
		/**
		 * Settings
		 */

		// branding
		$wp_customize->add_setting( 'logo_img', array( 'default' => '%s/assets/images/logo.png' ) );
		$wp_customize->add_setting( 'favicon', array( 'default' => '%s/assets/images/favicon.png' ) );

		// styles & colors
		$wp_customize->add_setting( 'theme_primary_clr', array( 'default' => '#51ab6d' ) );
		$wp_customize->add_setting( 'text_clr', array( 'default' => '#40454a' ) );
		$wp_customize->add_setting( 'link_clr', array( 'default' => '#51ab6d' ) );
		$wp_customize->add_setting( 'headings_dark_clr', array( 'default' => '#2f343b' ) );
		$wp_customize->add_setting( 'headings_light_clr', array( 'default' => '#9a9a90' ) );

		$wp_customize->add_setting( 'navbar_text_color', array( 'default' => '#9a9a90' ) );
		$wp_customize->add_setting( 'navbar_dropdown_text_color', array( 'default' => '#f3f4f4' ) );
		$wp_customize->add_setting( 'navbar_bg_color', array( 'default' => '#ffffff' ) );
		$wp_customize->add_setting( 'footer_bg_clr', array( 'default' => '#ffffff' ) );

		// front page carousel
		$wp_customize->add_setting( 'front_carousel_interval', array( 'default' => '5000' ) );

		// layout
		$wp_customize->add_setting( 'blog_layout', array( 'default' => 'right' ) );
		$wp_customize->add_setting( 'blog_text', array( 'default' => 'excerpt' ) );

		// social icons
		$wp_customize->add_setting( 'icons_new_window', array( 'default' => 'no' ) );
		$social_networks = array( 'android', 'appstore', 'blogger', 'dribbble', 'email', 'facebook', 'flickr', 'instagram', 'linkedin', 'pinterest', 'rss', 'skype', 'tumblr', 'twitter', 'vimeo', 'yelp', 'youtube', 'googleplus' );
		sort( $social_networks );

		foreach ( $social_networks as $social_network ) {
			$wp_customize->add_setting( 'zocial[' . $social_network . ']', array( 'default' => '' ) );
		}

		// main navigation sticky or static
		$wp_customize->add_setting( 'navbar_position', array( 'default' => 'static' ) );

		// footer and other
		$wp_customize->add_setting( 'footer_left', array( 'default' => '&copy; Copyright 2014' ) );
		$wp_customize->add_setting( 'footer_right', array( 'default' => 'Readable Theme by <a href="http://www.proteusthemes.com">ProteusThemes</a>' ) );


		/**
		 * Sections
		 */
		$wp_customize->add_section( 'customizer_appearance', array(
			'title'       => _x( 'Appearance', 'backend', 'readable_wp' ),
			'description' => _x( 'Appearance for the Readable theme', 'backend', 'readable_wp' ),
			'priority'    => 30
		) );
		$wp_customize->add_section( 'customizr_front_page', array(
			'title'       => _x( 'Front Page', 'backend', 'readable_wp' ),
			'description' => _x( 'Settings for the front page display', 'backend', 'readable_wp' ),
			'priority'    => 35
		) );
		$wp_customize->add_section( 'customizr_layout', array(
			'title'       => _x( 'Layout', 'backend', 'readable_wp' ),
			'description' => _x( 'Settings for the layout of blog', 'backend', 'readable_wp' ),
			'priority'    => 50
		) );
		$wp_customize->add_section( 'customizer_social_icons', array(
			'title'=> _x( 'Social Icons', 'backend', 'readable_wp' ),
			'description' => _x( 'Insert your link (the whole URL with <code>http://</code>) for specific icon to appear', 'backend', 'readable_wp' ),
			'priority'=> 100
		) );
		$wp_customize->add_section( 'customizer_other', array(
			'title'       => _x( 'Footer &amp; Other', 'backend', 'readable_wp' ),
			'description' => _x( 'Other settings', 'backend', 'readable_wp' ),
			'priority'    => 160
		) );



		/**
		 * Controls
		 */

		// Section: customizer_appearance
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'readable_logo_img',
			array(
				'label'    => _x( 'Logo image (recommended dimensions: 200 x 90)', 'backend', 'readable_wp' ),
				'section'  => 'customizer_appearance',
				'settings' => 'logo_img',
			)
		) );
		$wp_customize->add_control( new WP_Customize_Upload_Control(
			$wp_customize,
			'readable_favicon',
			array(
				'label'    => _x( 'Favicon image (16 x 16 px), format .ico', 'backend', 'readable_wp' ),
				'section'  => 'customizer_appearance',
				'settings' => 'favicon',
			)
		) );

		// carousel
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_front_carousel_interval',
			array(
				'label'    => _x( 'Slider interval (in miliseconds, 1s = 1000ms)', 'backend', 'readable_wp' ),
				'section'  => 'customizr_front_page',
				'settings' => 'front_carousel_interval',
				'priority' => 25,
			)
		) );

		// layout
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_blog_layout',
			array(
				'label'    => _x( 'Main blog view sidebar position', 'backend', 'readable_wp' ),
				'section'  => 'customizr_layout',
				'settings' => 'blog_layout',
				'type'     => 'select',
				'choices'  => array(
					'right' => _x( 'Right', 'backend', 'readable_wp' ),
					'left'  => _x( 'Left', 'backend', 'readable_wp' ),
					'no'    => _x( 'No sidebar', 'backend', 'readable_wp' ),
				)
			)
		) );
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_blog_text',
			array(
				'label'    => _x( 'In the list of posts show:', 'backend', 'readable_wp' ),
				'section'  => 'customizr_layout',
				'settings' => 'blog_text',
				'type'     => 'radio',
				'choices'  => array(
					'excerpt'   => _x( 'Excerpt with CONTINUE READING link', 'backend', 'readable_wp' ),
					'content' => _x( 'Full content', 'backend', 'readable_wp' ),
				)
			)
		) );


		// Section: colors
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_theme_primary_clr',
			array(
				'label'    => _x( 'Primary theme color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'theme_primary_clr',
				'priority' => 0
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_text_clr',
			array(
				'label'    => _x( 'Text color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'text_clr',
				'priority' => 2
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_link_clr',
			array(
				'label'    => _x( 'Links color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'link_clr',
				'priority' => 1
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_headings_dark_clr',
			array(
				'label'    => _x( 'Headings dark color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'headings_dark_clr',
				'priority' => 3
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_headings_light_clr',
			array(
				'label'    => _x( 'Headings light color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'headings_light_clr',
				'priority' => 4
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_navbar_text_color',
			array(
				'label'    => _x( 'Navbar links color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'navbar_text_color',
				'priority' => 5
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_navbar_dropdown_text_color',
			array(
				'label'    => _x( 'Navbar dropdown links color', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'navbar_dropdown_text_color',
				'priority' => 6
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_navbar_bg_color',
			array(
				'label'    => _x( 'Navbar background', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'navbar_bg_color',
				'priority' => 7
			)
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'readable_footer_bg_clr',
			array(
				'label'    => _x( 'Footer background', 'backend', 'readable_wp' ),
				'section'  => 'colors',
				'settings' => 'footer_bg_clr',
				'priority' => 8
			)
		) );

		// customizer_social_icons
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_icons_new_window',
			array(
				'label'    => _x( 'Open the icons in the new window?', 'backend', 'readable_wp'),
				'section'  => 'customizer_social_icons',
				'settings' => 'icons_new_window',
				'priority' => 0,
				'type'     => 'radio',
				'choices'  => array(
					'yes' => _x( 'Yes', 'backend', 'readable_wp'),
					'no'  => _x( 'No', 'backend', 'readable_wp'),
				)
			)
		) );
		foreach ( $social_networks as $n => $social_network ) {
			$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'readable_zocial_' . $social_network,
				array(
					'label'    => ucwords( $social_network ),
					'section'  => 'customizer_social_icons',
					'settings' => 'zocial[' . $social_network . ']',
					'priority' => ( $n+1 ) * 10
				)
			) );
		}

		// customizer_other
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_footer_left',
			array(
				'label'    => _x( 'Footer left HTML', 'backend', 'readable_wp' ),
				'section'  => 'customizer_other',
				'settings' => 'footer_left',
				'type'     => 'text',
			)
		) );
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_footer_right',
			array(
				'label'    => _x( 'Footer right HTML', 'backend', 'readable_wp' ),
				'section'  => 'customizer_other',
				'settings' => 'footer_right',
				'type'     => 'text',
			)
		) );

		// nav
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'readable_navbar_position',
			array(
				'label'    => __( 'Main navbar position' , 'readable_wp'),
				'section'  => 'nav',
				'settings' => 'navbar_position',
				'type'     => 'radio',
				'choices'  => array(
					'sticky' => _x( 'Sticky', 'backend', 'readable_wp'),
					'static' => _x( 'Static', 'backend', 'readable_wp'),
				)
			)
		) );
	}


	/**
	* This will output the custom WordPress settings to the live theme's WP head.
	*
	* Used by hook: 'wp_head'
	*
	* @see add_action('wp_head',$func)
	*/
	public static function customizer_styles() {
		// customizer settings
		$primary_color              = get_theme_mod( 'theme_primary_clr', '#51ab6d' );
		$text_clr                   = get_theme_mod( 'text_clr', '#40454a' );
		$link_clr                   = get_theme_mod( 'link_clr', '#51ab6d' );
		$headings_dark_clr          = get_theme_mod( 'headings_dark_clr', '#2f343b' );
		$headings_light_clr         = get_theme_mod( 'headings_light_clr', '#9a9a90' );
		$navbar_bg_color            = get_theme_mod( 'navbar_bg_color', '#ffffff' );
		$footer_bg_clr              = get_theme_mod( 'footer_bg_clr', '#ffffff' );
		$navbar_text_color          = get_theme_mod( 'navbar_text_color', '#9a9a90' );
		$navbar_dropdown_text_color = get_theme_mod( 'navbar_dropdown_text_color', '#f3f4f4' );

		ob_start();

		if ( ! empty( $primary_color ) ) : ?>

/******************
Primary theme color
*******************/

.social__container, .search__container, .search-panel .search-panel__text, .navigation > li.current-menu-item > a, .navigation > li:hover > a, .navigation > li.current-menu-ancestor > a, .widget-contact__title, .navigation .sub-menu > li > a:hover, .error .primary-color {
	color: <?php echo $primary_color; ?>
}

.social .social__dropdown, ::selection, .navbar-toggle, .widget_search .search-submit {
	background: <?php echo $primary_color; ?>
}

.wpcf7-submit, .navigation > li > a:after, .btn-primary, #submitWPComment {
	background: linear-gradient(to bottom, <?php echo $primary_color; ?>, <?php echo darken_css_color($primary_color, 10); ?>)
}

blockquote, .wpcf7-submit, .btn-primary, .navbar-toggle, #submitWPComment {
	border-color: <?php echo $primary_color; ?>
}

.search__container:hover, .social__container:hover {
	color: <?php echo darken_css_color($primary_color, 10); ?>
}

@media (min-width: 992px) {
	.navigation .sub-menu > li > a {
		background: <?php echo $primary_color; ?>
	}
}

.wpcf7-submit:hover, .btn-primary:hover, .social .social__dropdown li a:hover, #submitWPComment:hover {
	background: <?php echo darken_css_color($primary_color, 10); ?>
}

@media (min-width: 992px) {
	.navigation .sub-menu > li > a:hover {
		background: <?php echo darken_css_color($primary_color, 10); ?>
	}
}

.wpcf7-submit:hover, .navigation .sub-menu > li > a, .navigation .sub-menu, .btn-primary:hover, .social .social__dropdown li .social__container, #submitWPComment:hover {
	border-color: <?php echo darken_css_color($primary_color, 10); ?>
}

.format-link { background: -webkit-radial-gradient(50% 50%, circle closest-corner, <?php echo $primary_color; ?> 0%, <?php echo darken_css_color($primary_color, 15); ?> 100%); background: radial-gradient(circle closest-corner at 50% 50%, <?php echo $primary_color; ?> 0%, <?php echo darken_css_color($primary_color, 15); ?> 100%);}

/******************
Text color
*******************/

blockquote, .post-content, .post-content--narrow, .post-content--narrow span, body .su-tabs-style-default .su-tabs-pane {
	color: <?php echo $text_clr; ?>
}

/******************
Link color
*******************/

a, .menu li a, .pptwj .pptwj-tabs-wrap .tab-links li a.selected, .pptwj .pptwj-tabs-wrap .tab-links li a:hover, .pptwj .pptwj-tabs-wrap .boxes ul.tab-filter-list li a:hover, .pptwj .pptwj-tabs-wrap .boxes ul.tab-filter-list li a.selected, .pagination .prev, .pagination .next, .pagination__page-numbers .current {
	color: <?php echo $link_clr; ?>
}

.widget_tag_cloud a, .tags a {
	border-color: <?php echo $link_clr; ?>
}

a:hover, .menu li a:hover {
	color: <?php echo darken_css_color($link_clr, 10); ?>
}

.widget_tag_cloud a:hover, .tags a:hover, .pptwj .pptwj-tabs-wrap .boxes ul.tab-filter-list li a.selected:after, .pptwj .pptwj-tabs-wrap .boxes ul.tab-filter-list li a:hover:after {
	background-color: <?php echo $link_clr; ?>
}

/******************
Headings dark
*******************/
h1, h1 a, .h1 a, .h2, h2, h2 a, .h2 a, h4, h4 a, .h4 a, h5, h5 a, .h5 a, .zem_rp_title {
	color: <?php echo $headings_dark_clr; ?>
}

/******************
Headings light
*******************/
h3, h3 a, .h3 a, h6, h6 a, .h6 a, .wp_rp_excerpt {
	color: <?php echo $headings_light_clr; ?>
}

/******************
Navbar background
*******************/
.header {
	background-color: <?php echo $navbar_bg_color; ?>
}

/******************
Footer background
*******************/
.footer, .copyrights {
	background-color: <?php echo $footer_bg_clr; ?>
}

/******************
Navbar text color
*******************/

.navigation > li > a {
	color: <?php echo $navbar_text_color; ?>
}

/******************
Navbar dropdown text color
*******************/

@media (min-width: 992px) {
	.navigation .sub-menu > li > a, .navigation .sub-menu > li > a:hover {
		color: <?php echo $navbar_dropdown_text_color; ?>
	}
}

/* WP Customizer end */

<?php
if ( '#ffffff' !== $navbar_bg_color ) : ?>

/******************
Header color
*******************/

.header {
	background: <?php echo $navbar_bg_color; ?>
}

		<?php
		endif; // '#ffffff' !== $navbar_color
		endif;

		echo "/* User Custom CSS */" . PHP_EOL;
		echo ot_get_option( 'user_custom_css', '' );
		/*end of output*/

		$style = ob_get_clean();

		wp_add_inline_style( 'main', $style );
	}

	/**
	 * Outputs the favicon
	 */
	public static function header_output() {
		$favicon = get_theme_mod( 'favicon', get_template_directory_uri() . '/assets/images/favicon.png' );

		if( ! empty( $favicon ) ) : ?>
			<link rel="shortcut icon" href="<?php echo $favicon; ?>">
		<?php endif;
	}
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'Readable_Customize', 'register' ) );

// Output custom CSS to live site
add_action( 'wp_enqueue_scripts' , array( 'Readable_Customize', 'customizer_styles' ), 20 );
add_action( 'wp_head' , array( 'Readable_Customize', 'header_output' ) );