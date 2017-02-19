<?php

/**
 * WordPress booster V 3.0 by tagDiv
 */

do_action('td_wp_booster_before');



// theme specific config values
require_once('td_global.php');
do_action('td_global_after');

require_once('td_global_blocks.php');
require_once('td_util.php');
require_once('td_menu.php');           //theme menu support
require_once('td_social_icons.php');   // The social icons
require_once('td_review.php');         // Review
require_once('td_js_buffer.php');      // js buffer class
require_once('td_page_generator.php');  // page generator
require_once('td_block_layout.php');    // block layout
require_once('td_template_layout.php');  // template layout
require_once('td_unique_posts.php');     //unique posts (uses hooks + do_action('td_wp_boost_new_module'); )
require_once('td_data_source.php');      // data source
require_once('td_css_compiler.php');  // css compiler
require_once('td_page_views.php'); // page views counter
require_once('td_module.php');           // module builder
require_once('td_block.php');            // block builder
require_once('td_cake.php');
require_once('td_ads.php');       //handles background click ad
require_once('td_widget_builder.php');  // widget builder
require_once('td_first_install.php');  //the code that runs on the first install of the theme
require_once("td_fonts.php"); //fonts support
require_once("td_ajax.php"); // ajax
require_once('td_video_support.php');  // video thumbnail support
require_once('td_video_playlist_support.php'); //video playlist support
require_once('td_css_buffer.php'); // css buffer class
require_once('td_js_generator.php');  // ~ app config ~ css generator
require_once('td_background.php');  //the background support
require_once('td_demo_site.php');  // the demo site
require_once('td_smart_list.php');  //the smart lists
require_once('td_generic_filter_builder.php');  // generic filter buider class
require_once('td_login.php');  // modal window for user login
require_once('td_author.php' );  //author meta support
require_once('td_more_article_box.php');  //handles more articles box
require_once('td_block_widget.php');  //used to make widgets from our blocks


/*
 * if debug - the constants are used to load the live color customizer (demo) and to remove the tf bar on ios devices
 */
if (TD_DEBUG_LIVE_THEME_STYLE) {
    require_once('td_theme_style.php' );
}

if (TD_DEBUG_IOS_REDIRECT) {
    require_once('td_ios_redirect.php' );
}



do_action('td_wp_booster_loaded'); //used by our plugins




/**
 * localization
 */
function td_load_text_domains() {
    load_theme_textdomain(TD_THEME_NAME, get_template_directory() . '/translation');

    // theme specific config values
    require_once('td_translate.php');

}
add_action('after_setup_theme', 'td_load_text_domains');


/**
 * Loads the javascript and css needed for the theme
 * Class td_resource_loader
 */
class td_resource_loader {
    function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'load_front_js'));
        add_action('wp_enqueue_scripts',  array($this, 'load_js_composer_front'), 1000);
        add_action('wp_enqueue_scripts',  array($this, 'load_front_css'), 1001);   // 1001 priority because visual composer uses 1000
        add_action('admin_enqueue_scripts', array($this, 'load_wp_admin_css'));
        add_action('admin_enqueue_scripts', array($this, 'load_wp_admin_js'));
    }


    function load_js_composer_front() {
        wp_enqueue_style( 'js_composer_front' );
    }


    /**
     * front end css files
     */
    function load_front_css() {
        if (TD_DEBUG_USE_LESS) {
            wp_enqueue_style('td-theme', get_template_directory_uri() . '/td_less_style.css.php',  '', TD_THEME_VERSION, 'all' );
        } else {
            wp_enqueue_style('td-theme', get_stylesheet_uri(), '', TD_THEME_VERSION, 'all' );
        }
    }





    /**
     * front end javascript files
     */
    function load_front_js() {
        $td_deploy_mode = TD_DEPLOY_MODE;

        //switch the deploy mode to demo if we have tagDiv speed booster
        if (defined('TD_SPEED_BOOSTER')) {
            $td_deploy_mode = 'demo';
        }

        switch ($td_deploy_mode) {
            default: //deploy
                wp_enqueue_script('td-site', get_template_directory_uri() . '/js/td_site.js', array('jquery'), TD_THEME_VERSION, true);
                break;

            case 'demo':
                wp_enqueue_script('td-site-min', get_template_directory_uri() . '/js/td_site.min.js', array('jquery'), TD_THEME_VERSION, true);
                break;

            case 'dev':
                // dev version - load each file separately
                $last_js_file_id = '';
                foreach (td_global::$js_files as $js_file_id => $js_file) {
                    if ($last_js_file_id == '') {
                        wp_enqueue_script($js_file_id, get_template_directory_uri() . $js_file, array('jquery'), TD_THEME_VERSION, true); //first, load it with jQuery dependency
                    } else {
                        wp_enqueue_script($js_file_id, get_template_directory_uri() . $js_file, array($last_js_file_id), TD_THEME_VERSION, true);  //not first - load with the last file dependency
                    }
                    $last_js_file_id = $js_file_id;
                }
                break;

        }


        //add the comments reply to script on single pages
        if (is_singular()) {
            wp_enqueue_script('comment-reply');
        }
    }


    /**
     * css for wp-admin
     */
    function load_wp_admin_css() {
        //load the panel font in wp-admin
        $td_protocol = is_ssl() ? 'https' : 'http';
        wp_enqueue_style('google-font-ubuntu', $td_protocol . '://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic'); //used on content
        wp_enqueue_style('td-wp-admin-td-panel-2', get_template_directory_uri() . '/includes/wp_booster/wp-admin/css/wp-admin.css', false, TD_THEME_VERSION, 'all' );

        //load the colorpicker
        wp_enqueue_style( 'wp-color-picker' );
    }


    /**
     * js for wp-admin
     */
    function load_wp_admin_js() {
        wp_enqueue_script('td_wp_admin', get_template_directory_uri() . '/includes/wp_booster/wp-admin/js/td_wp_admin.js', array('jquery', 'wp-color-picker'), 1, false); //legacy code
        wp_enqueue_script('td_wp_admin_panel', get_template_directory_uri() . '/includes/wp_booster/wp-admin/js/td_wp_admin_panel.js', array('jquery', 'wp-color-picker', 'td_wp_admin'), 1, false);
        wp_enqueue_script('thickbox');
        add_thickbox();
    }



}
new td_resource_loader();





/*  ----------------------------------------------------------------------------
    Custom <title> wp_title - seo
 */
function td_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . __td('Page') . ' ' .  max( $paged, $page );

    return $title;
}
add_filter( 'wp_title', 'td_wp_title', 10, 2 );



/*  ----------------------------------------------------------------------------
    archive widget - add current class
 */
function theme_get_archives_link ( $link_html ) {
    global $wp;
    static $current_url;
    if ( empty( $current_url ) ) {
        $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
    }
    if ( stristr( $current_url, 'page' ) !== false ) {
        $current_url = substr($current_url, 0, strrpos($current_url, 'page'));
    }
    if ( stristr( $link_html, $current_url ) !== false ) {
        $link_html = preg_replace( '/(<[^\s>]+)/', '\1 class="current"', $link_html, 1 );
    }
    return $link_html;
}
add_filter('get_archives_link', 'theme_get_archives_link');



/*  ----------------------------------------------------------------------------
    add span wrap for category number in widget
 */
add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
    $links = str_replace('</a> (', '<span class="td-widget-no">', $links);
    $links = str_replace(')', '</span></a>', $links);
    return $links;
}


//remove gallery style css
add_filter( 'use_default_gallery_style', '__return_false' );


/*  ----------------------------------------------------------------------------
    more text
 */
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($text){
    return ' ';
}



/*  ----------------------------------------------------------------------------
    editor style
 */
function my_theme_add_editor_styles() {
    add_editor_style('td_less_editor-style.php');
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );


//the bottom code for css
function td_bottom_code() {
    global $post;
    //buffy before pasting custom css code
    $buffy_custom_css = '';

    $speed_booster = '';

    if (defined('TD_SPEED_BOOSTER')) {
        $speed_booster = 'Speed booster: ' . TD_SPEED_BOOSTER . "\n";
    }

    echo '

    <!--

        Theme: ' . TD_THEME_NAME .' by tagDiv 2014
        Version: ' . TD_THEME_VERSION . ' (rara)
        Deploy mode: ' . TD_DEPLOY_MODE . '
        ' . $speed_booster . '
        uid: ' . uniqid() . '
    -->

    ';


    //get and paste user custom css
    $td_custom_css = stripslashes(td_util::get_option('tds_custom_css'));

    //desktop
    $td_responsive_css_desktop = stripslashes(td_util::get_option('tds_responsive_css_desktop'));

    //ipad landscape
    $td_responsive_css_ipad_landscape = stripslashes(td_util::get_option('tds_responsive_css_ipad_landscape'));

    //ipad portrait
    $td_responsive_css_ipad_portrait = stripslashes(td_util::get_option('tds_responsive_css_ipad_portrait'));

    //phone
    $td_responsive_css_phone = stripslashes(td_util::get_option('tds_responsive_css_phone'));

    //check if we have to add the custom css code
    if(!empty($td_custom_css) || !empty($td_responsive_css_desktop) || !empty($td_responsive_css_ipad_landscape) || !empty($td_responsive_css_ipad_portrait) || !empty($td_responsive_css_phone)) {
        $buffy_custom_css =  '
            <style type="text/css" media="screen">';

        //paste custom css
        if(!empty($td_custom_css)) {
            $buffy_custom_css .= '
                '.$td_custom_css.'
                ';
        }

        //paste desktop custom css
        if(!empty($td_responsive_css_desktop)) {
            $buffy_custom_css .= '

                  /* responsive monitor */
                  @media (min-width: 1200px) {
                  ' .
                $td_responsive_css_desktop .
                '}
                  ';
        }

        //paste ipad landscape custom css
        if(!empty($td_responsive_css_ipad_landscape)) {
            $buffy_custom_css .= '

                  /* responsive landscape tablet */
                  @media (min-width: 1019px) and (max-width: 1199px) {
                  ' .
                $td_responsive_css_ipad_landscape .
                '}';
        }

        //paste ipad portrait custom css
        if(!empty($td_responsive_css_ipad_portrait)) {
            $buffy_custom_css .= '

                 /* responsive portrait tablet */
                  @media (min-width: 768px) and (max-width: 1018px) {
                  ' .
                $td_responsive_css_ipad_portrait .
                '}';
        }

        //paste ipad portrait custom css
        if(!empty($td_responsive_css_phone)) {
            $buffy_custom_css .= '

                 /* responsive phone */
                 @media (max-width: 767px) {
                 ' .
                $td_responsive_css_phone .
                '}';
        }

        $buffy_custom_css .= '</style>';

        echo $buffy_custom_css;
    }



    //get and paste user custom javascript
    $td_custom_javascript = stripslashes(td_util::get_option('tds_custom_javascript'));
    if(!empty($td_custom_javascript)) {
        echo '<script type="text/javascript">'
            .$td_custom_javascript.
            '</script>';
    }



    //AJAX POST VIEW COUNT
    if(td_util::get_option('tds_ajax_post_view_count') == 'enabled') {

        //Ajax get & update counter views
        if(is_single()) {
            //echo 'post page: '.  $post->ID;
            if($post->ID > 0) {
                td_js_buffer::add_to_footer('
                jQuery().ready(function jQuery_ready() {
                    td_ajax_count.td_get_views_counts_ajax("post",' . json_encode('[' . $post->ID . ']') . ');
                });
            ');
            }
        }
    }
}
add_action('wp_footer', 'td_bottom_code');


/*  ----------------------------------------------------------------------------
    google analytics
 */
function td_header_analytics_code() {
    $td_analytics = td_util::get_option('td_analytics');
    echo stripslashes($td_analytics);

}

add_action('wp_head', 'td_header_analytics_code', 40);



//Append page slugs to the body class
function add_slug_to_body_class( $classes ) {
    global $post;
    if( is_home() ) {
        $key = array_search( 'blog', $classes );
        if($key > -1) {
            unset( $classes[$key] );
        };
    } elseif( is_page() ) {
        $classes[] = sanitize_html_class( $post->post_name );
    } elseif(is_singular()) {
        $classes[] = sanitize_html_class( $post->post_name );
    };


    $i = 0;
    foreach ($classes as $key => $value) {
        $pos = strripos($value, 'span');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'row');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'container');
        if ($pos !== false) {
            unset($classes[$i]);
        }
        $i++;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');



//remove span row container classes from post_class()
function add_slug_to_post_class( $classes ) {
    $i = 0;
    foreach ($classes as $key => $value) {
        $pos = strripos($value, 'span');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'row');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'container');
        if ($pos !== false) {
            unset($classes[$i]);
        }
        $i++;
    }
    return $classes;
}
add_filter('post_class', 'add_slug_to_post_class');



/*  -----------------------------------------------------------------------------
    Our custom admin bar
 */
add_action('admin_bar_menu', 'td_custom_menu', 1000);
function td_custom_menu() {
    global $wp_admin_bar;
    if(!is_super_admin() || !is_admin_bar_showing()) return;

    $wp_admin_bar->add_menu(array(
        'parent' => 'site-name',
        'title' => '<span class="td-admin-bar-red">Theme panel</span>',
        'href' => admin_url('admin.php?page=td_theme_panel'),
        'id' => 'td-menu1'
    ));




    $wp_admin_bar->add_menu( array(
        'id'   => 'our_support_item',
        'meta' => array('title' => 'Theme support', 'target' => '_blank'),
        'title' => 'Theme support',
        'href' => 'http://forum.tagdiv.com' ));

}

/**
 * Add prev and next links to a numbered link list - the pagination on single.
 */
function wp_link_pages_args_prevnext_add($args)
{
    global $page, $numpages, $more, $pagenow;

    if (!$args['next_or_number'] == 'next_and_number')
        return $args; # exit early

    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early

    if($page-1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
        ;

    if ($page<$numpages) # there is a next page
        $args['after'] = _wp_link_page($page+1)
            . $args['link_before'] . $args['nextpagelink'] . $args['link_after'] . '</a>'
            . $args['after']
        ;

    return $args;
}
add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');






/**
 * Add, on theme body element, the custom classes from Theme Panel -> Custom Css -> Custom Body class(s)
 */
function td_my_custom_class_names_on_body($classes) {
    //get the custom classes from theme options
    $custom_classes = td_util::get_option('td_body_classes');

    if(!empty($custom_classes)) {
        // add 'custom classes' to the $classes array
        $classes[] = $custom_classes;
    }

    // return the $classes array
    return $classes;
}
add_filter('body_class','td_my_custom_class_names_on_body');










/*  ----------------------------------------------------------------------------
    used by ie8 - there is no other way to add js for ie8 only
 */
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->
    ';
}
add_action('wp_head', 'add_ie_html5_shim');





/*  ----------------------------------------------------------------------------
    WordPress booster framework admin panel
 */
//check to see if we are on the backend
if(is_admin()) {
    // the two files are required by wp_admin -> to make the page / posts metaboxes
    require_once('wp-admin/panel/td_panel_generator.php');
    require_once('wp-admin/panel/td_panel_data_source.php');

    if (current_user_can('switch_themes')) {
        // the panel
        require_once('wp-admin/panel/td_panel.php');
    }

}



/*  -----------------------------------------------------------------------------
    WP-ADMIN section
 */
if (is_admin()) {

    /*
     * the wp-admin TinyMCE editor buttons
     */
    require_once('wp-admin/tinymce/tinymce.php');

    /*
     * Custom content metaboxes (the select sidebar dropdown/post etc)
     */
    require_once ('wp-admin/content-metaboxes/td_templates_settings.php');
}



if (is_admin()) {
    /**
     * Helper pointers
     */
    require_once('td_help_pointers.php');

    add_action('admin_enqueue_scripts', 'td_help_pointers');
    function td_help_pointers() {
        //First we define our pointers
        $pointers = array(
            array(
                'id' => 'vc_columns_pointer',   // unique id for this pointer
                'screen' => 'page', // this is the page hook we want our pointer to show on
                'target' => '.composer-switch', // the css selector for the pointer to be tied to, best to use ID's
                'title' => TD_THEME_NAME . ' (tagDiv) tip',
                'content' => '<img src="' . get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/td_helper_pointers/vc-columns.png' . '">',
                'position' => array(
                    'edge' => 'top', //top, bottom, left, right
                    'align' => 'left' //top, bottom, left, right, middle
                )
            )
            // more as needed
        );
        //Now we instantiate the class and pass our pointer array to the constructor
        $myPointers = new td_help_pointers($pointers);
    }

    /*  -----------------------------------------------------------------------------
        TGM_Plugin_Activation
     */
    require_once 'external/class-tgm-plugin-activation.php';

    add_action('tgmpa_register', 'td_required_plugins');

    function td_required_plugins() {
        $plugins = array(
            array(
                'name'			=> 'Visual Composer ( required )', // The plugin name
                'slug'			=> 'js_composer', // The plugin slug (typically the folder name)
                'source'			=> get_stylesheet_directory() . '/includes/plugins/js_composer.zip', // The plugin source
                'required'			=> true, // If false, the plugin is only 'recommended' instead of required
                'version'			=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation'	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                'external_url'		=> '', // If set, overrides default API URL and points to an external URL
            ),
            array(
                'name'     				=> 'tagDiv social counter ( This plugin is optional )', // The plugin name
                'slug'     				=> 'td-social-counter', // The plugin slug (typically the folder name)
                'source'   				=> get_template_directory_uri() . '/includes/plugins/td-social-counter.zip', // The plugin source
                'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
                'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
            )
        );


        $config = array(
            'domain'       		=> TD_THEME_NAME,         	// Text domain - likely want to be the same as your theme.
            'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
            'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
            'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
            'menu'         		=> 'td_plugins', 	// Menu slug
            'has_notices'      	=> true,                       	// Show admin notices or not
            'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
            'message' 			=> '',							// Message to output right before the plugins table
            'strings'      		=> array(
                'page_title'                       			=> __( 'Install Required Plugins', TD_THEME_NAME ),
                'menu_title'                       			=> __( 'Install Plugins', TD_THEME_NAME ),
                'installing'                       			=> __( 'Installing Plugin: %s', TD_THEME_NAME ), // %1$s = plugin name
                'oops'                             			=> __( 'Something went wrong with the plugin API.', TD_THEME_NAME ),
                'notice_can_install_required'     			=> _n_noop('<span class="td-tgma-tip">' . TD_THEME_NAME . ' theme:</span> Hi, sorry to bother you but please install %1$s plugin. It\'s included with the theme and no aditional purchase is requiered!', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
                'notice_can_install_recommended'			=> _n_noop( 'If you need social icons, you can install %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
                'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
                'notice_can_activate_required'    			=> _n_noop( '<span class="td-tgma-tip">' . TD_THEME_NAME . ' theme:</span> Hi, please activate %1$s. Our theme works best with it.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
                'notice_can_activate_recommended'			=> _n_noop( '<span class="td-tgma-tip">' . TD_THEME_NAME . ' theme:</span> The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
                'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
                'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
                'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
                'install_link' 					  			=> _n_noop( 'Go to plugin instalation', ' Begin installing plugins' ),
                'activate_link' 				  			=> _n_noop( 'Go to activation panel', 'Activate installed plugins' ),
                'return'                           			=> __( 'Return to Required Plugins Installer', TD_THEME_NAME ),
                'plugin_activated'                 			=> __( 'Plugin activated successfully.', TD_THEME_NAME ),
                'complete' 									=> __( 'All plugins installed and activated successfully. %s', TD_THEME_NAME ), // %1$s = dashboard link
                'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
            )
        );
        tgmpa( $plugins, $config );
    }
}





