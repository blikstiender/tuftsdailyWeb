<?php
/**
 * the start of the panel
 */

class td_panel {
    function __construct() {
        add_action('admin_menu', array($this, 'register_theme_panel'));
    }

    function register_theme_panel() {
        add_menu_page('Theme panel', 'Theme panel', "edit_posts", "td_theme_panel", array($this, "td_theme_panel"), null); /* wp doc: add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); */
    }


    function td_theme_panel() {
        //the default image for wp-admin panel
        td_js_buffer::add_variable('td_admin_first_image', get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/bg/1.jpg');

        //run the wp-admin panel background
        td_js_buffer::add_to_wp_admin_footer("jQuery('#wpwrap').backstretch(td_admin_first_image, {fade: 800});");

        echo "<style>#wpwrap {background-color: #539AC5}</style>";

        // load the view based on the td_page parameter
        if (!empty($_REQUEST['td_page'])) {
            if ($_REQUEST['td_page'] == 'td_view_import') {
                include 'td_view_import.php';
            }

            elseif ($_REQUEST['td_page'] == 'td_view_import_export_settings') {
                include 'td_view_import_export_settings.php';
            }
            elseif ($_REQUEST['td_page'] == 'td_view_import_theme_styles') {
                include 'td_view_import_theme_styles.php';
            }
            elseif ($_REQUEST['td_page'] == 'td_view_custom_fonts') {
                include 'td_view_custom_fonts.php';
            }



        } else {
            // default we load the panel
            include 'td_view_panel.php';
        }

        if(!empty($_REQUEST['clear_social_counter_cache']) and $_REQUEST['clear_social_counter_cache'] == 1) {
            //clear social counter cache
            update_option('td_social_api_v3_last_val', '');
        }

    }


}

new td_panel();




/*  ----------------------------------------------------------------------------
    change the value of the button used to return the picture into pannel
    It only changes the text from insert into post to Use this image
    @deprecated @todo - will have to deprecate this and put proper upload form in the panel
 */
function td_replace_upload_thickbox_button_text($text, $translated_text) {
    if ($text == 'Insert into Post') {
        $referer = strpos(wp_get_referer(), 'td_upload');
        if($referer != '') {
            return 'Use this image';
        }
    }

    //return the default text
    return $translated_text;
}





function td_upload_image_options() {
    global $pagenow;

    if($pagenow == 'media-upload.php' or $pagenow == 'async-upload.php') {
        add_filter('gettext', 'td_replace_upload_thickbox_button_text' , 1, 3);
    }
}

add_action('admin_init', 'td_upload_image_options');







