<?php
/**
 * Readable functions and definitions
 *
 * @package Readable
 * @author Primoz Ciger <primoz@proteusnet.com>
 */

/**
 * Define the version variable to assign it to all the assets (css and js)
 */
define( 'READABLE_WP_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Define the development
 */
define( 'READABLE_DEVELOPMENT', false );

/**
 * Include important admin files
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/
 */
if ( ! isset( $content_width ) ) {
	$content_width = 700; /* pixels */
}

if( ! function_exists( 'readable_adjust_content_width' ) ) {
	function readable_adjust_content_width() { // adjust if necessary
		global $content_width;

		if ( is_page_template( 'page-no-sidebar.php' ) ) {
			$content_width = 940;
		}
	}
	add_action( 'template_redirect', 'readable_adjust_content_width' );
}


/**
 * Option Tree Plugin
 *
 * - ot_show_pages:      will hide the settings & documentation pages.
 * - ot_show_new_layout: will hide the "New Layout" section on the Theme Options page.
 */

if ( ! READABLE_DEVELOPMENT ) {
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
}

// Required: set 'ot_theme_mode' filter to true.
add_filter( 'ot_theme_mode', '__return_true' );

// Required: include OptionTree.
load_template( trailingslashit( get_template_directory() ) . 'bower_components/option-tree/ot-loader.php' );

// Load the options file
if ( ! READABLE_DEVELOPMENT ) {
	load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
}




/**
 * Theme support and thumbnail sizes
 */
if( ! function_exists( 'readable_setup' ) ) {
	function readable_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Readable, use a find and replace
		 * to change 'readable_wp' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'readable_wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => '#f3f4f4',
			'default-image' => ''
		) );

		set_post_thumbnail_size( 1138, 493, true );
		// add_image_size( 'jumbotron-slider', 1920, 420, true );

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', 'Main Menu' );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// support for post formats
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		// WooCommerce
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'readable_setup' );
}



/**
 * Enqueue styles
 */
if( ! function_exists( 'readable_enqueue_styles' ) ) {
	function readable_enqueue_styles() {
		if ( is_admin() || is_login_page() ) {
			return;
		}

		// google fonts
		$protocol = is_ssl() ? 'https' : 'http';
		wp_enqueue_style( 'readable-google-fonts', "{$protocol}://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Lato:700,900" );

		// main
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/stylesheets/main.css', array( 'readable-google-fonts' ), READABLE_WP_VERSION );
	}
	add_action( 'wp_enqueue_scripts', 'readable_enqueue_styles' );
}


/**
 * Enqueue scripts
 */
if( ! function_exists( 'readable_scripts' ) ) {
	function readable_scripts() {
		if ( ! is_admin() && ! is_login_page() ) {
			wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/built.js', array(
				'jquery',
				'underscore',
			), READABLE_WP_VERSION, true );

			/**
			 * Pass data to the main script
			 */
			wp_localize_script( 'main', 'ReadableVars', array(
				// 'pathToTheme' => get_template_directory_uri(),
			) );

			// for nested comments
			if ( ! is_admin() && is_singular() && comments_open() ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
	}
	add_action( 'wp_enqueue_scripts', 'readable_scripts' );
}



/**
 * Load OT variables
 */
if( ! function_exists( 'readable_load_ot_settings' ) ) {
	function readable_load_ot_settings() {
		global $content_divider;
		if ( function_exists( 'ot_get_option' ) ) {
			$content_divider = ot_get_option( 'content_divider', 'scissors' );
		}
	}
	add_action( 'init', 'readable_load_ot_settings' );
}



/**
 * Require the files in the folder /inc/
 */
$files_to_require = array(
	'helpers',
	'post-types',
	'ot-meta-boxes',
	'shortcodes',
	'register-sidebars',
	'filters',
	'theme-customizer',
	'custom-comments',
	'woocommerce',
	'widget-author',
);

// Conditionally require the includes files, based if they exist in the child theme or not
foreach( $files_to_require as $file ) {
	locate_template ( "inc/{$file}.php", true, true );
}

/**
 * Plugin activation class
 */
if( is_admin() ) {
	require_once( trailingslashit( get_template_directory() ) . 'inc/tgm-plugin-activation.php' );
}

/**
 * Trigger automatic theme updates notifications
 */
if ( is_admin() && ! function_exists( 'readable_check_for_updates' ) ) {
	function readable_check_for_updates() {
		load_template( trailingslashit( get_template_directory() ) . 'bower_components/Envato-WordPress-Theme-Updater/envato-wp-theme-updater.php' );
		$username = trim( ot_get_option( 'tf_username', '' ) );
		$api_key  = trim( ot_get_option( 'tf_api_key', '' ) );

		if ( ! empty( $username ) && ! empty( $api_key ) ) {
			Envato_WP_Theme_Updater::init( $username, $api_key, 'ProteusThemes' );
		}
	}
	add_action( 'after_setup_theme', 'readable_check_for_updates' );
}