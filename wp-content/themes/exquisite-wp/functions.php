<?php
/*-----------------------------------------------------------------------------------

	Here we have all the custom functions for the theme
	Please be extremely cautious editing this file.
	You have been warned!

-------------------------------------------------------------------------------------*/
// Define Theme Name for localization
if (!defined('THB_THEME_NAME')) {
	define('THB_THEME_NAME', 'exquisite');
}
define('THB_THEME_ROOT', get_template_directory_uri());
define('THB_THEME_ROOT_ABS', get_template_directory());

// Translation
add_action('after_setup_theme', 'lang_setup');
function lang_setup(){
	load_theme_textdomain(THB_THEME_NAME, get_template_directory() . '/inc/languages');
}

// Option-Tree Theme Mode
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'inc/ot-fonts.php' );
include_once( 'inc/ot-radioimages.php' );
include_once( 'inc/ot-metaboxes.php' );
include_once( 'inc/ot-themeoptions.php' );
include_once( 'inc/ot-functions.php' );
if ( ! class_exists( 'OT_Loader' ) ) {
	include_once( 'admin/ot-loader.php' );
}
// Script Calls
require_once('inc/script-calls.php');

// Breadcrumbs
require_once('inc/breadcrumbs.php');

// Excerpts
require_once('inc/excerpts.php');

// Custom Titles
require_once('inc/wptitle.php');

// Pagination
require_once('inc/wp-pagenavi.php');

// Post Formats
add_theme_support('post-formats', array('video', 'image', 'gallery'));

// Masonry Load More
require_once('inc/masonry-ajax.php');
add_action("wp_ajax_nopriv_thb_ajax_home", "load_more_posts");
add_action("wp_ajax_thb_ajax_home", "load_more_posts");
add_action("wp_ajax_nopriv_thb_ajax_home2", "load_more_posts_type2");
add_action("wp_ajax_thb_ajax_home2", "load_more_posts_type2");

// TGM Plugin Activation Class
require_once('inc/class-tgm-plugin-activation.php');
require_once('inc/plugins.php');

// Enable Featured Images
require_once('inc/postthumbs.php');

// Activate WP3 Menu Support
require_once('inc/wp3menu.php');

// Enable Sidebars
require_once('inc/sidebar.php');

// Custom Comments
require_once('inc/comments.php');

// Widgets
require_once('inc/widgets.php');

// Like functionality
require_once('inc/themelike.php');

// Related Posts
require_once('inc/related.php');

// WPML Support
require_once('inc/wpml.php');

// Weather
require_once('inc/weather.php');

// Custom Login Logo
require_once('inc/customloginlogo.php');

// Do Shortcodes inside Widgets
add_filter('widget_text', 'do_shortcode');

// Twitter oAuth
require_once('inc/twitter_oauth.php');
require_once('inc/twitter_gettweets.php');

// Misc 
require_once('inc/misc.php');

// WordPress Importer
if ( is_admin() ) {
	if(!class_exists('WP_Import'))
		require_once( trailingslashit(THB_THEME_ROOT_ABS) . 'inc/wordpress-importer/wordpress-importer.php');
	require_once( trailingslashit(THB_THEME_ROOT_ABS) . 'inc/import.php');
}
/**
 * Include posts from authors in the search results where
 * either their display name or user login matches the query string
 *
 * @author danielbachhuber
 */
add_filter( 'posts_search', 'db_filter_authors_search' );
function db_filter_authors_search( $posts_search ) {
 
	// Don't modify the query at all if we're not on the search template
	// or if the LIKE is empty
	if ( !is_search() || empty( $posts_search ) )
		return $posts_search;
 
	global $wpdb;
	// Get all of the users of the blog and see if the search query matches either
	// the display name or the user login
	add_filter( 'pre_user_query', 'db_filter_user_query' );
	$search = sanitize_text_field( get_query_var( 's' ) );
	$args = array(
		'count_total' => false,
		'search' => sprintf( '*%s*', $search ),
		'search_fields' => array(
			'display_name',
			'user_login',
		),
		'fields' => 'ID',
	);
	$matching_users = get_users( $args );
	remove_filter( 'pre_user_query', 'db_filter_user_query' );
	// Don't modify the query if there aren't any matching users
	if ( empty( $matching_users ) )
		return $posts_search;
	// Take a slightly different approach than core where we want all of the posts from these authors
	$posts_search = str_replace( ')))', ")) OR ( {$wpdb->posts}.post_author IN (" . implode( ',', array_map( 'absint', $matching_users ) ) . ")))", $posts_search );
	return $posts_search;
}
/**
 * Modify get_users() to search display_name instead of user_nicename
 */
function db_filter_user_query( &$user_query ) {
 
	if ( is_object( $user_query ) )
		$user_query->query_where = str_replace( "user_nicename LIKE", "display_name LIKE", $user_query->query_where );
	return $user_query;
}

/**
 * Limit custom statuses based on user role
 * In this example, we limit the statuses available to the
 * 'contributor' user role
 *
 * @see http://editflow.org/extend/limit-custom-statuses-based-on-user-role/
 *
 * @param array $custom_statuses The existing custom status objects
 * @return array $custom_statuses Our possibly modified set of custom statuses
 */
function efx_limit_custom_statuses_by_role( $custom_statuses ) {
 
    $current_user = wp_get_current_user();
    switch( $current_user->roles[0] ) {
        // Only allow a contributor to access specific statuses from the dropdown
        case 'author':
            $permitted_statuses = array(
                    'draft-news',
                    'draft-arts',
		    'draft-features',
		    'draft-sports',
	            'draft-opinion',
                    'in-progress',
                );
            // Remove the custom status if it's not whitelisted
            foreach( $custom_statuses as $key => $custom_status ) {
                if ( !in_array( $custom_status->slug, $permitted_statuses ) )
                    unset( $custom_statuses[$key] );
            }
            break;
	// Only allow a contributor to access specific statuses from the dropdown
        case 'copy_editor':
            $permitted_statuses = array(
                    'to-be-copyedited',
                    'copy-edited',
                );
            // Remove the custom status if it's not whitelisted
            foreach( $custom_statuses as $key => $custom_status ) {
                if ( !in_array( $custom_status->slug, $permitted_statuses ) )
                    unset( $custom_statuses[$key] );
            }
            break;
    }
    return $custom_statuses;
}
add_filter( 'ef_custom_status_list', 'efx_limit_custom_statuses_by_role' );

// THIS INCLUDES THE THUMBNAIL IN OUR RSS FEED
function insertThumbnailRSS($content) {
	global $post;
	if ( has_post_thumbnail( $post->ID ) ){
		$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '' . $content;
	}
	return $content;
}
add_filter('the_excerpt_rss', 'insertThumbnailRSS');
add_filter('the_content_feed', 'insertThumbnailRSS');

// This function would disable heartbeat calls, presumably making the site fast 

/*add_action( 'init', 'stop_heartbeat', 1 );

function stop_heartbeat() {
        wp_deregister_script('heartbeat');
}

*/
function mc_admin_users_caps( $caps, $cap, $user_id, $args ){
 
    foreach( $caps as $key => $capability ){
 
        if( $capability != 'do_not_allow' )
            continue;
 
        switch( $cap ) {
            case 'edit_user':
            case 'edit_users':
                $caps[$key] = 'edit_users';
                break;
            case 'delete_user':
            case 'delete_users':
                $caps[$key] = 'delete_users';
                break;
            case 'create_users':
                $caps[$key] = $cap;
                break;
        }
    } 
    return $caps;
}
add_filter( 'map_meta_cap', 'mc_admin_users_caps', 1, 4 );
remove_all_filters( 'enable_edit_any_user_configuration' );
add_filter( 'enable_edit_any_user_configuration', '__return_true');
 
/**
 * Checks that both the editing user and the user being edited are
 * members of the blog and prevents the super admin being edited.
 */
function mc_edit_permission_check() {
    global $current_user, $profileuser;
 
    $screen = get_current_screen();
 
    get_currentuserinfo();
 
    if( ! is_super_admin( $current_user->ID ) && in_array( $screen->base, array( 'user-edit', 'user-edit-network' ) ) ) { // editing a user profile
        if ( is_super_admin( $profileuser->ID ) ) { // trying to edit a superadmin while less than a superadmin
            wp_die( __( 'You do not have permission to edit this user.' ) );
        } elseif ( ! ( is_user_member_of_blog( $profileuser->ID, get_current_blog_id() ) && is_user_member_of_blog( $current_user->ID, get_current_blog_id() ) )) { // editing user and edited user aren't members of the same blog
            wp_die( __( 'You do not have permission to edit this user.' ) );
        }
    }
 
}
add_filter( 'admin_head', 'mc_edit_permission_check', 1, 4 );

//This function will force hyperlinks to open in a new window or tab.
function autoblank($text) {
	$return = str_replace('href=', 'target="_blank" href=', $text);
	$return = str_replace('target="_blank" href="http://tuftsdaily.com', 'href="http://tuftsdaily.com', $return);
	$return = str_replace('target="_blank" href="#', 'href="#', $return);
	$return = str_replace(' target = "_blank">', '>', $return);
	return $return;
}
add_filter('the_content', 'autoblank');
add_filter('comment_text', 'autoblank');
add_filter('widget_text', 'do_shortcode');//shortcodes in sidebar

add_filter('wpmu_signup_user_notification', 'auto_activate_users', 10, 4);
function auto_activate_users($user, $user_email, $key, $meta){
  wpmu_activate_signup($key);
  return false;
}

add_filter( 'wpmu_welcome_notification', '__return_false' ); 

/** Force URLs in srcset attributes into HTTPS scheme.* This is particularly useful when you're running a Flexible SSL frontend like Cloudflare*/function ssl_srcset( $sources ) {foreach ( $sources as &$source ) {$source['url'] = set_url_scheme( $source['url'], 'https' );}return $sources;}add_filter( 'wp_calculate_image_srcset', 'ssl_srcset' );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
