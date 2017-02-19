<?php
/*
    tagDiv - 2014
    Our portofolio:  http://themeforest.net/user/tagDiv/portfolio
    Thanks for using our theme !
*/




/**
 * Load the speed booster framework + theme specific files
 */
if (!defined('TD_THEME_WP_BOOSTER')) {
    require_once('td_deploy_mode.php');
    require_once('includes/td_config.php');
    require_once('includes/wp_booster/td_wp_booster_functions.php');
}




require_once('includes/td_css_generator.php');

//the module that is used to render single pages
locate_template('includes/modules/td_module_single.php', true);

//modules
locate_template('includes/modules/td_module_1.php', true);
locate_template('includes/modules/td_module_2.php', true);
locate_template('includes/modules/td_module_3.php', true);
locate_template('includes/modules/td_module_4.php', true);
locate_template('includes/modules/td_module_5.php', true);
locate_template('includes/modules/td_module_6.php', true);
locate_template('includes/modules/td_module_7.php', true);
locate_template('includes/modules/td_module_8.php', true);
locate_template('includes/modules/td_module_9.php', true);
locate_template('includes/modules/td_module_10.php', true);
locate_template('includes/modules/td_module_11.php', true);
locate_template('includes/modules/td_module_13.php', true);
locate_template('includes/modules/td_module_12.php', true);
locate_template('includes/modules/td_module_14.php', true);
locate_template('includes/modules/td_module_15.php', true);
locate_template('includes/modules/td_module_mx1.php', true);
locate_template('includes/modules/td_module_mx2.php', true);
locate_template('includes/modules/td_module_mx3.php', true);
locate_template('includes/modules/td_module_mx4.php', true);
locate_template('includes/modules/td_module_slide.php', true);
locate_template('includes/modules/td_module_aj_search.php', true);
locate_template('includes/modules/td_module_related_posts.php', true);
locate_template('includes/modules/td_module_mega_menu.php', true);
locate_template('includes/modules/td_module_big_grid.php', true);
locate_template('includes/modules/td_module_trending_now.php', true);

//blocks
require_once('includes/shortcodes/td_block_1.php');
require_once('includes/shortcodes/td_block_2.php');
require_once('includes/shortcodes/td_block_3.php');
require_once('includes/shortcodes/td_block_4.php');
require_once('includes/shortcodes/td_block_5.php');
require_once('includes/shortcodes/td_block_6.php');
require_once('includes/shortcodes/td_block_7.php');
require_once('includes/shortcodes/td_block_8.php');
require_once('includes/shortcodes/td_block_9.php');
require_once('includes/shortcodes/td_block_10.php');
require_once('includes/shortcodes/td_block_11.php');
require_once('includes/shortcodes/td_block_12.php');
require_once('includes/shortcodes/td_block_13.php');
require_once('includes/shortcodes/td_block_14.php');
require_once('includes/shortcodes/td_block_15.php');
require_once('includes/shortcodes/td_block_16.php');
require_once('includes/shortcodes/td_block_big_grid.php');
require_once('includes/shortcodes/td_block_trending_now.php');
require_once('includes/shortcodes/td_block_video_playlist.php');
require_once('includes/shortcodes/td_quote.php');
require_once('includes/shortcodes/td_ad_box.php');
require_once('includes/shortcodes/td_popular_categories.php');
require_once('includes/shortcodes/td_authors.php');
require_once('includes/shortcodes/td_text_with_title.php');
require_once('includes/shortcodes/td_slide.php');
require_once('includes/shortcodes/td_related_posts.php'); //related posts on single block
require_once('includes/shortcodes/td_mega_menu.php'); //the mega menu block
require_once('includes/shortcodes/td_homepage_full_1.php');

// widgets
require_once('includes/widgets/td_page_builder_widgets.php');

// smart lists
require_once('includes/smart_lists/td_smart_list_1.php');
require_once('includes/smart_lists/td_smart_list_2.php');
require_once('includes/smart_lists/td_smart_list_3.php');
require_once('includes/smart_lists/td_smart_list_4.php');










/*  ----------------------------------------------------------------------------
    CSS fonts / google fonts in front end
 */

function td_load_css_fonts() {
    if ((defined('TD_DEPLOY_MODE') and (TD_DEPLOY_MODE == 'demo' )) or defined('TD_SPEED_BOOSTER')) {
        //on demo and dev we load only the latin fonts
        //modify this collection if you want to optimize the fonts loaded when you have the speed booster enabled
        //collection url -> : http://www.google.com/fonts#ReviewPlace:refine/Collection:PT+Sans:400,700,400italic|Ubuntu:400,400italic|Open+Sans:400italic,400|Oswald:400,700|Roboto+Condensed:400italic,700italic,400,700
        wp_enqueue_style('google-font-rest', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,700,400|Open+Sans:400italic,600italic,700italic,400,700,600'); //used on menus/small text
    } else {
        $td_user_fonts_list = array();
        $td_user_fonts_db = td_util::get_option('td_fonts');
        if(!empty($td_user_fonts_db)) {
            foreach($td_user_fonts_db as $td_font_setting_key => $td_font_setting_val) {
                if(!empty($td_font_setting_val) and !empty($td_font_setting_val['font_family'])) {
                    $td_user_fonts_list[] = $td_font_setting_val['font_family'];
                }
            }
        }

        // enqueue the fonts
        if(!in_array('g_438', $td_user_fonts_list)) {//'g_438', //Open Sans
            wp_enqueue_style('google-font-opensans', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic'); //used on menus/small text
        }
        if(!in_array('g_522', $td_user_fonts_list)) {//'g_522', //Roboto condensed
            wp_enqueue_style('google-roboto-cond', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic'); //used on content
        }
    }


    /**
     * add the google link for fonts used by user
     *
     * td_fonts_css_files : holds the link to fonts.googleapis.com in the database
     *
     * this section will appear in the header of the source of the page
     */
    $td_fonts_css_files = td_util::get_option('td_fonts_css_files');
    if(!empty($td_fonts_css_files)) {
        wp_enqueue_style('google-fonts-style', td_global::$http_or_https . $td_fonts_css_files);
    }

}
add_action('wp_enqueue_scripts', 'td_load_css_fonts');






function remove_more_link_scroll( $link ) {

	$link = preg_replace( '|#more-[0-9]+|', '', $link );

        $link = '<div class="more-link-wrap wpb_button wpb_btn-danger">' . $link . '</div>';
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );



/*  ----------------------------------------------------------------------------
    excerpt lenght
 */
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {

    // on feed show full content if it's set in wordpress
    if (is_feed() and get_option('rss_use_excerpt') == 0) {
        return 999999;
    }
    $excerpt_length = td_util::get_option('tds_wp_default_excerpt');
    if (!empty($excerpt_length) and is_numeric($excerpt_length)) {
        return $excerpt_length;
    } else {
        return 22; //default
    }
}




/*  ----------------------------------------------------------------------------
    thumbnails
 */

//the image sizes that we use
add_theme_support( 'post-thumbnails' );

/**
 * To add new image sizes please use the WordPress native function - add_image_size - @link http://codex.wordpress.org/Function_Reference/add_image_size
 * example:
 *      add_image_size('your_thumb_id', 640, 350, array( 'center', 'top' ));
 *
 * we ONLY generate the thumbs that are enabled form theme panel -> block settings -> Thumbs on module & blocks
 */
td_util::add_image_size_if_enabled('td_0x420',    0,   420, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_80x60',    80,  60,  array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_100x75',   100, 75,  array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_180x135',  180, 135, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_238x178',  238, 178, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_300x160',  300, 160, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_300x194',  300, 194, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_300x350',  300, 350, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_341x220',  341, 220, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_537x360',  537, 360, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_640x0',    640, 0,   array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_640x350',  640, 350, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_681x0',  681, 0, array( 'center', 'top' ));
td_util::add_image_size_if_enabled('td_1021x580',1021, 580, array( 'center', 'top' ));




/*  ----------------------------------------------------------------------------
    Post formats
 */
add_theme_support('post-formats', array('video'));



/*  ----------------------------------------------------------------------------
    shortcodes in widgets
 */
add_filter('widget_text', 'do_shortcode');



/*  ----------------------------------------------------------------------------
    content width - this is overwritten in post
 */
if (!isset($content_width)) {
    $content_width = 640;
}



/*  ----------------------------------------------------------------------------
    rss supporrt
 */
add_theme_support('automatic-feed-links');



/*  ----------------------------------------------------------------------------
    Register the themes default sidebars + dinamic ones
 */
//register the default sidebar
register_sidebar(array(
    'name'=> TD_THEME_NAME . ' default',
    'id' => 'td-default', //the id is used by the importer
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Footer 1',
    'id' => 'td-footer-1',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Footer 2',
    'id' => 'td-footer-2',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Footer 3',
    'id' => 'td-footer-3',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));



//get our custom dynamic sidebars
$currentSidebars = td_util::get_option('sidebars');

//if we have user made sidebars, register them in wp
if (!empty($currentSidebars)) {
    foreach ($currentSidebars as $sidebar) {
        register_sidebar(array(
            'name'=>$sidebar,
            'id' => 'td-' . td_util::sidebar_name_to_id($sidebar),
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="block-title"><span>',
            'after_title' => '</span></div>',
        ));

    } //end foreach
}








/*  ----------------------------------------------------------------------------
    visual composer rewrite classes
 */

function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    //vc_span4
    if ($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', 'td-pb-row', $class_string);
    }
    if ($tag=='vc_column' || $tag=='vc_column_inner') {
        $class_string = preg_replace('/vc_col-sm-(\d{1,2})/', 'td-pb-span$1', $class_string);
        //$class_string = preg_replace('/vc_span(\d{1,2})/', 'td-pb-span$1', $class_string);
    }
    return $class_string;
}

// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if (function_exists('vc_set_as_theme')) {
    vc_set_as_theme();
}


if(function_exists('wpb_map')) {
    //map all of our blocks in page builder
    td_global_blocks::wpb_map_all();
}



if (function_exists('vc_disable_frontend')) {
    vc_disable_frontend();
}

if (class_exists('WPBakeryVisualComposer')) { //disable visual composer updater
    $td_composer = WPBakeryVisualComposer::getInstance();
    $td_composer->disableUpdater();
}

/*  ----------------------------------------------------------------------------
    visual composer rewrite templates
 */

add_filter( 'vc_load_default_templates', 'my_custom_template_modify_array' );
function my_custom_template_modify_array($data) {
    return array(); // This will remove all default templates
}

add_action('vc_load_default_templates_action','my_custom_template_for_vc');
function my_custom_template_for_vc() {
    require_once('includes/td_templates_builder.php');
}




function td_custom_gallery_settings_hook () {
    // define your backbone template;
    // the "tmpl-" prefix is required,
    // and your input field should have a data-setting attribute
    // matching the shortcode name
    ?>
    <script type="text/html" id="tmpl-td-custom-gallery-setting">
        <label class="setting">
            <span>Gallery Type</span>
            <select data-setting="td_select_gallery_slide">
                <option value="">Default </option>
                <option value="slide">TagDiv Slide Gallery</option>
            </select>
        </label>

        <label class="setting">
            <span>Gallery Title</span>
            <input type="text" value="" data-setting="td_gallery_title_input" />
        </label>
    </script>

    <script>

        jQuery(document).ready(function(){

            // add your shortcode attribute and its default value to the
            // gallery settings list; $.extend should work as well...
            _.extend(wp.media.gallery.defaults, {
                td_select_gallery_slide: '', td_gallery_title_input: ''
            });

            // merge default gallery settings template with yours
            wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
                template: function(view){
                    return wp.media.template('gallery-settings')(view)
                        + wp.media.template('td-custom-gallery-setting')(view);
                }
            });

            //console.log();
            // wp.media.model.Attachments.trigger('change')
        });

    </script>
<?php
}
//custom gallery setting
add_action('print_media_templates', 'td_custom_gallery_settings_hook');


/**
 * @param string $output - is empty !!!
 * @param $atts
 * @param bool $content
 * @param bool $tag
 * @return mixed
 */
function my_gallery_shortcode( $output = '', $atts, $content = false, $tag = false ) {
    //print_r($atts);
    $buffy = '';


    //check for gallery  = slide
    if(!empty($atts) and !empty($atts['td_select_gallery_slide']) and $atts['td_select_gallery_slide'] == 'slide') {

        $td_double_slider2_no_js_limit = 7;
        $td_nr_columns_slide = 'td-slide-on-2-columns';
        $nr_title_chars = 95;

        //check to see if we have or not sidebar on the page, to set the small images when need to show them on center
        if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $td_double_slider2_no_js_limit = 11;
            $td_nr_columns_slide = 'td-slide-on-3-columns';
            $nr_title_chars = 170;
        }

        $title_slide = '';
        //check for the title
        if(!empty($atts['td_gallery_title_input'])) {
            $title_slide = $atts['td_gallery_title_input'];

            //check how many chars the tile have, if more then 84 then that cut it and add ... after
            if(mb_strlen ($title_slide, 'UTF-8') > $nr_title_chars) {
                $title_slide = mb_substr($title_slide, 0, $nr_title_chars, 'UTF-8' ) . '...';
            }
        }


        $slide_images_thumbs_css = '';
        $slide_display_html  = '';
        $slide_cursor_html = '';

        $image_ids = explode(',', $atts['ids']);

        //check to make sure we have images
        if (count($image_ids) == 1 and !is_numeric($image_ids[0])) {
            return;
        }


        $image_ids = array_map('trim', $image_ids);//trim elements of the $ids_gallery array

        //generate unique gallery slider id
        $gallery_slider_unique_id = td_global::td_generate_unique_id();

        $cur_item_nr = 1;
        foreach($image_ids as $image_id) {

            //get the info about attachment
            $image_attachment = td_util::attachment_get_full_info($image_id);

            //get images url
            $td_temp_image_url_80x60 = wp_get_attachment_image_src($image_id, 'td_80x60'); //for the slide - for small images slide popup
            $td_temp_image_url_full = $image_attachment['src'];                            //default big image - for magnific popup

            //if we are on full wight (3 columns use the default images not the resize ones)
            if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {

                $td_temp_image_url = wp_get_attachment_image_src($image_id, 'td_1021x580');       //1021x580 images - for big slide
            } else {
                $td_temp_image_url = wp_get_attachment_image_src($image_id, 'td_0x420');       //0x420 image sizes - for big slide
            }


            //check if we have all the images
            if(!empty($td_temp_image_url[0]) and !empty($td_temp_image_url_80x60[0]) and !empty($td_temp_image_url_full)) {

                //css for display the small cursor image
                $slide_images_thumbs_css .= '
                    #' . $gallery_slider_unique_id . '  .td-doubleSlider-2 .td-item' . $cur_item_nr . ' {
                        background: url(' . $td_temp_image_url_80x60[0] . ') 0 0 no-repeat;
                    }';


                //html for display the big image
                $class_post_content = '';
                if(!empty($image_attachment['description']) or !empty($image_attachment['caption'])) {
                    $class_post_content = 'td-gallery-slide-content';
                }

                //if picture has caption & description
                $figcaption = '';
                if(!empty($image_attachment['caption']) or !empty($image_attachment['description'])) {
                    $figcaption = '<figcaption class = "td-slide-caption ' . $class_post_content . '">';

                    if(!empty($image_attachment['caption'])) {
                        $figcaption .= '<div class = "td-gallery-slide-copywrite">' . $image_attachment['caption'] . '</div>';
                    }

                    if(!empty($image_attachment['description'])) {
                        $figcaption .= '<span>' . $image_attachment['description'] . '</span>';
                    }

                    $figcaption .= '</figcaption>';
                }


                $slide_display_html .= '
                    <div class = "td-slide-item td-item' . $cur_item_nr . '">
                        <figure class="td-slide-galery-figure td-slide-popup-gallery">
                            <a class="slide-gallery-image-link" href="' . $td_temp_image_url_full . '" title="' . $image_attachment['title'] . '"  data-caption="' . esc_attr($image_attachment['caption'], ENT_QUOTES) . '"  data-description="' . htmlentities($image_attachment['description'], ENT_QUOTES) . '">
                                <img src="' . $td_temp_image_url[0] . '" alt="' . htmlentities($image_attachment['alt'], ENT_QUOTES) . '">
                            </a>
                            ' . $figcaption . '
                        </figure>
                    </div>';


                //html for display the small cursor image
                $slide_cursor_html .= '
                    <div class = "td-button td-item' . $cur_item_nr . '">
                        <div class = "td-border"></div>
                    </div>';

                $cur_item_nr++;
            }//end check for images
        }//end foreach



        //check if we have html code for the slider
        if(!empty($slide_display_html) and !empty($slide_cursor_html)) {

            //get the number of slides
            $nr_of_slides = count($image_ids);
            if($nr_of_slides < 0) {
                $nr_of_slides = 0;
            }

            $buffy = '
                <style type="text/css">
                    ' .
                    $slide_images_thumbs_css . '
                </style>


                <div id="' . $gallery_slider_unique_id . '" class="' . $td_nr_columns_slide . '">
                    <div class="post_td_gallery">
                        <div class="td-gallery-slide-top">
                           <div class="td-gallery-title">' . $title_slide . '</div>

                            <div class="td-gallery-controls-wrapper">
                                <div class="td-gallery-slide-count"><span class="td-gallery-slide-item-focus">1</span> ' . __td('of') . ' ' . $nr_of_slides . '</div>
                                <div class="td-gallery-slide-prev-next-but">
                                    <i class = "td-icon-left doubleSliderPrevButton"></i>
                                    <i class = "td-icon-right doubleSliderNextButton"></i>
                                </div>
                            </div>
                        </div>

                        <div class = "td-doubleSlider-1 ">
                            <div class = "td-slider">
                                ' . $slide_display_html . '
                            </div>
                        </div>

                        <div class = "td-doubleSlider-2">
                            <div class = "td-slider">
                                ' . $slide_cursor_html . '
                            </div>
                        </div>

                    </div>

                </div>
                ';



            $slide_javascript = '
                    //total number of slides
                    var ' . $gallery_slider_unique_id . '_nr_of_slides = ' . $nr_of_slides . ';

                    jQuery(document).ready(function() {
                        //magnific popup
                        jQuery("#' . $gallery_slider_unique_id . ' .td-slide-popup-gallery").magnificPopup({
                            delegate: "a",
                            type: "image",
                            tLoading: "Loading image #%curr%...",
                            mainClass: "mfp-img-mobile",
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0,1]
                            },
                            image: {
                                tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
                                    titleSrc: function(item) {//console.log(item.el);
                                    //alert(jQuery(item.el).data("caption"));
                                    return item.el.attr("data-caption") + "<div>" + item.el.attr("data-description") + "<div>";
                                }
                            },
                            zoom: {
                                    enabled: true,
                                    duration: 300,
                                    opener: function(element) {
                                        return element.find("img");
                                    }
                            },

                            callbacks: {
                                change: function() {
                                    // Will fire when popup is closed
                                    jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-1").iosSlider("goToSlide", this.currItem.index + 1 );
                                }
                            }

                        });



                        jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-1").iosSlider({
                            scrollbar: true,
                            snapToChildren: true,
                            desktopClickDrag: true,
                            infiniteSlider: true,
                            responsiveSlides: true,
                            navPrevSelector: jQuery("#' . $gallery_slider_unique_id . ' .doubleSliderPrevButton"),
                            navNextSelector: jQuery("#' . $gallery_slider_unique_id . ' .doubleSliderNextButton"),
                            scrollbarHeight: "2",
                            scrollbarBorderRadius: "0",
                            scrollbarOpacity: "0.5",
                            onSliderResize: td_gallery_resize_update_vars_' . $gallery_slider_unique_id . ',
                            onSliderLoaded: doubleSlider2Load_' . $gallery_slider_unique_id . ',
                            onSlideChange: doubleSlider2Load_' . $gallery_slider_unique_id . ',
                            keyboardControls:true
                        });

                        //small image slide
                        jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2 .td-button").each(function(i) {
                            jQuery(this).bind("click", function() {
                                jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-1").iosSlider("goToSlide", i+1);
                            });
                        });

                        //check the number of slides
                        if(' . $gallery_slider_unique_id . '_nr_of_slides > ' . $td_double_slider2_no_js_limit . ') {
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2").iosSlider({
                                desktopClickDrag: true,
                                snapToChildren: true,
                                snapSlideCenter: true,
                                infiniteSlider: true
                            });
                        } else {
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2").addClass("td_center_slide2");
                        }

                        function doubleSlider2Load_' . $gallery_slider_unique_id . '(args) {
                            //var currentSlide = args.currentSlideNumber;
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2").iosSlider("goToSlide", args.currentSlideNumber);


                            //put a transparent border around all small sliders
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2 .td-button .td-border").css("border", "3px solid #ffffff").css("opacity", "0.5");
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2 .td-button").css("border", "0");

                            //put a white border around the focused small slide
                            jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2 .td-button:eq(" + (args.currentSlideNumber-1) + ") .td-border").css("border", "3px solid #ffffff").css("opacity", "1");
                            //jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-2 .td-button:eq(" + (args.currentSlideNumber-1) + ")").css("border", "3px solid #ffffff");

                            //write the current slide number
                            td_gallery_write_current_slide_' . $gallery_slider_unique_id . '(args.currentSlideNumber);
                        }

                        //writes the current slider beside to prev and next buttons
                        function td_gallery_write_current_slide_' . $gallery_slider_unique_id . '(slide_nr) {
                            jQuery("#' . $gallery_slider_unique_id . ' .td-gallery-slide-item-focus").html(slide_nr);
                        }


                        /*
                        * Resize the iosSlider when the page is resided (fixes bug on Android devices)
                        */
                        function td_gallery_resize_update_vars_' . $gallery_slider_unique_id . '(args) {
                            if(td_detect.is_android) {
                                setTimeout(function(){
                                    jQuery("#' . $gallery_slider_unique_id . ' .td-doubleSlider-1").iosSlider("update");
                                }, 1500);
                            }
                        }
                    });';


            td_js_buffer::add_to_footer($slide_javascript);
        }//end check if we have html code for the slider
    }//end if slide

    //!!!!!! WARNING
    //$return has to be != empty to overwride the default output
    return $buffy;
}

add_filter( 'post_gallery', 'my_gallery_shortcode', 10, 4 );


/**
 * @todo trebuie fixuite toate tipurile de imagini din gallerie in functie de setarile template-ului
 * filter the gallery shortcode
 * @param $out
 * @return mixed
 */
function my_gallery_atts_modifier($out) {
    // td_global::$cur_single_template_sidebar_pos; //is set in single.php @todo set it also on the page template
    //link to files instead of no link or attachement. The file is used by magnific pupup
    $out['link'] = 'file';

    if (!isset($out['columns'])) {
        $out['columns'] = '';
    }

    if (td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
        if ($out['columns'] == 1) {
            $out['size'] = 'td_1021x580';
        }
    } else {
        if ($out['columns'] == 1) {
            $out['size'] = 'td_640x350';
        }

    }
    return $out;
}
add_filter( 'shortcode_atts_gallery', 'my_gallery_atts_modifier', 1); //run with 1 priority, allow anyone to overwrite our hook.



/**
 * html 5 theme support
 */
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );



/**
 * td-modal-image support in tinymce
 */
function td_change_backbone_js_hook() {
    //change the backbone js template
    ?>
    <script type="text/javascript">


        (function (){


            var td_template_content = jQuery('#tmpl-image-details').text();

            var td_our_content = '' +
                '<div class="setting">' +
                '<span>Modal image</span>' +
                '<div class="button-large button-group" >' +
                '<button class="button active td-modal-image-off" value="left">Off</button>' +
                '<button class="button td-modal-image-on" value="left">On</button>' +
                '</div><!-- /setting -->' +
            '<div class="setting">' +
                '<span>tagDiv image style</span>' +
                '<select class="size td-wp-image-style">' +
                '<option value="">Default</option>' +
                '<option value="td_full_width">Full width</option>' +
                '<option value="td_full_width_and_grid">Full width and grid border</option>' +
                '<option value="td_left">Left ( Over grid )</option>' +
                '<option value="td_right">Right ( Over grid )</option>' +
                '</select>' +
                '</div>' +
            '</div>';

            //inject our settings in the template - before <div class="setting align">
            td_template_content = td_template_content.replace('<div class="setting align">', td_our_content + '<div class="setting align">');

            //save the template
            jQuery('#tmpl-image-details').html(td_template_content);

            //modal off - click event
            jQuery( ".td-modal-image-on" ).live( "click", function() {
                if (jQuery(this).hasClass('active')) {
                    return;
                }
                td_add_image_css_class('td-modal-image');

                jQuery( ".td-modal-image-off").removeClass('active');
                jQuery( ".td-modal-image-on").addClass('active');
            });

            //modal on - click event
            jQuery( ".td-modal-image-off" ).live( "click", function() {
                if (jQuery(this).hasClass('active')) {
                    return;
                }

                td_remove_image_css_class('td-modal-image');

                jQuery( ".td-modal-image-off").addClass('active');
                jQuery( ".td-modal-image-on").removeClass('active');
            });


            // select change event
            jQuery( ".td-wp-image-style" ).live( "change", function() {
                switch (jQuery( ".td-wp-image-style").val()) {


                    case 'td_full_width':
                        td_clear_all_classes(); //except the modal one
                        td_add_image_css_class('td-post-image-full');
                        break;

                    case 'td_full_width_and_grid':
                        td_clear_all_classes(); //except the modal one
                        td_add_image_css_class('td-post-image-full-and-grid');
                        break;


                    case 'td_left':
                        td_clear_all_classes(); //except the modal one
                        td_add_image_css_class('td-post-image-left');
                        break;


                    case 'td_right':
                        td_clear_all_classes(); //except the modal one
                        td_add_image_css_class('td-post-image-right');
                        break;



                    default:
                        td_clear_all_classes(); //except the modal one
                        jQuery('*[data-setting="extraClasses"]').change(); //trigger the change event for backbonejs

                }

            });


            //util functions to edit the image details in wp-admin
            function td_add_image_css_class(new_class) {
                var td_extra_classes_value = jQuery('*[data-setting="extraClasses"]').val();
                jQuery('*[data-setting="extraClasses"]').val(td_extra_classes_value + ' ' + new_class);
                jQuery('*[data-setting="extraClasses"]').change(); //trigger the change event for backbonejs
            }

            function td_remove_image_css_class(new_class) {
                var td_extra_classes_value = jQuery('*[data-setting="extraClasses"]').val();

                //try first with a space before the class
                var td_regex = new RegExp(" " + new_class,"g");
                td_extra_classes_value = td_extra_classes_value.replace(td_regex, '');


                var td_regex = new RegExp(new_class,"g");
                td_extra_classes_value = td_extra_classes_value.replace(td_regex, '');

                jQuery('*[data-setting="extraClasses"]').val(td_extra_classes_value);
                jQuery('*[data-setting="extraClasses"]').change(); //trigger the change event for backbonejs
            }


            //clears all classes except the modal image one
            function td_clear_all_classes() {
                var td_extra_classes_value = jQuery('*[data-setting="extraClasses"]').val();
                if (td_extra_classes_value.indexOf('td-modal-image') > -1) {
                    //we have the modal image one - keep it, remove the others
                    jQuery('*[data-setting="extraClasses"]').val('td-modal-image');
                } else {
                    jQuery('*[data-setting="extraClasses"]').val('');
                }
            }


            //monitor the backbone template for the current status of the picture
            setInterval(function(){
                var td_extra_classes_value = jQuery('*[data-setting="extraClasses"]').val();
                if (typeof td_extra_classes_value !== 'undefined' && td_extra_classes_value != '') {
                    // if we have modal on, switch the toggle
                    if (td_extra_classes_value.indexOf('td-modal-image') > -1) {
                        jQuery( ".td-modal-image-off").removeClass('active');
                        jQuery( ".td-modal-image-on").addClass('active');
                    }

                    //change the select
                    if (td_extra_classes_value.indexOf('td-post-image-full') > -1) {
                        jQuery( ".td-wp-image-style").val('td_full_width');
                    }

                    if (td_extra_classes_value.indexOf('td-post-image-full-and-grid') > -1) {
                        jQuery( ".td-wp-image-style").val('td_full_width_and_grid');
                    }

                    if (td_extra_classes_value.indexOf('td-post-image-left') > -1) {
                        jQuery( ".td-wp-image-style").val('td_left');
                    }

                    if (td_extra_classes_value.indexOf('td-post-image-right') > -1) {
                        jQuery( ".td-wp-image-style").val('td_right');
                    }
                }
            }, 1000);
        })(); //end anon function
    </script>
<?php
}
add_action('print_media_templates', 'td_change_backbone_js_hook');


/**
 * add custom classes to the single templates, also mix fixes for white menu and white grid
 * @param $classes
 * @returns the classes
 */
function td_add_single_template_class($classes){
    if (is_single()) {
        global $post;
        //read the custom single post settings
        $td_post_theme_settings = get_post_meta($post->ID, 'td_post_theme_settings', true);

        //if there is a post template added from add/edit post backend page
        if (!empty($td_post_theme_settings['td_post_template'])) {
            $classes []= sanitize_html_class($td_post_theme_settings['td_post_template']);

            //if not, and we have the default site post template set then, use it
        } else {
            $td_default_site_post_template = td_util::get_option('td_default_site_post_template');

            if(!empty($td_default_site_post_template)) {
                $classes []= sanitize_html_class($td_default_site_post_template);
            }
        }
    }

	// if main menu background color is white to fix the menu appearance on all headers
	if (td_util::get_option('tds_menu_color') == '#ffffff' or td_util::get_option('tds_menu_color') == 'ffffff') {
		$classes[] = 'white-menu';
	}

	// if grid color is white to fix the menu appearance on all headers
	if (td_util::get_option('tds_grid_line_color') == '#ffffff' or td_util::get_option('tds_grid_line_color') == 'ffffff') {
		$classes[] = 'white-grid';
	}

    return $classes;
}
add_filter('body_class', 'td_add_single_template_class');





//add `filter_by` URL variable so I can retrieve it with  `get_query_var` function
function td_category_big_grid_add_query_vars_filter($vars){
    $vars[] = "filter_by";
    return $vars;
}
add_filter( 'query_vars', 'td_category_big_grid_add_query_vars_filter' );



//modify the main query for category pages
function td_modify_main_query_for_category_page($query) {


    //checking for category page and main query
    if(!is_admin() and is_category() and $query->is_main_query() ) {

        //get the number of page where on
        $paged = get_query_var('paged');

        //get the `filter_by` URL($_GET) variable
        $filter_by = get_query_var('filter_by');

        //get the limit of posts on the category page
        $limit = get_option('posts_per_page');




        if (empty($query->query_vars['cat'])) {
            $td_current_category_obj = get_category_by_path(get_query_var('category_name'),false);  // when we have permalinks, we have to get the category object like this.
        } else {
            $td_current_category_obj = get_category($query->query_vars['cat']);
        }


        //if this is `yes` then do not show the big grid
        $category_big_grid_hide_option = td_util::get_category_option($td_current_category_obj->cat_ID, 'tdc_slider');


        //offset is hardcoded because of big grid
        $offset = 0;
        if($category_big_grid_hide_option != 'yes') {
            $offset = 5;
        }




        //echo $filter_by;
        switch ($filter_by) {
            case 'featured':
                //get the category object


                $query->set('category_name', $td_current_category_obj->slug);
                $query->set('cat', get_cat_ID(TD_FEATURED_CAT)); //add the fetured cat


                break;

            case 'popular':
                $query->set('meta_key', td_page_views::$post_view_counter_key);
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'DESC');
                break;

            case 'popular7':
                $query->set('meta_key', td_page_views::$post_view_counter_7_day_total);
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'DESC');
                break;

            case 'review_high':
                $query->set('meta_key', td_review::$td_review_key);
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'DESC');
                break;

            case 'random_posts':
                $query->set('orderby', 'rand');
                break;
        }//end switch



        // offset + custom pagination - if we have offset, wordpress overwrites the pagination and works with offset + limit
        if (!empty($offset) and $paged > 1) {
            $query->set('offset', $offset + ( ($paged - 1) * $limit) );
        } else {
            $query->set('offset', $offset);
        }

        //print_r($query);


        //print_r($query);
    }//end if main query
}
add_action('pre_get_posts', 'td_modify_main_query_for_category_page');







/*  -----------------------------------------------------------------------------
    Woo commerce
 */

add_theme_support('woocommerce');


// breadcrumb
function td_woocommerce_breadcrumbs() {
    return array(
        'delimiter' => ' <i class="td-icon-right td-bread-sep"></i> ',
        'wrap_before' => '<div class="entry-crumbs" itemprop="breadcrumb">',
        'wrap_after' => '</div>',
        'before' => '',
        'after' => '',
        'home' => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'td_woocommerce_breadcrumbs' );


// oue own pagination
if (!function_exists('woocommerce_pagination')) {
    // pagination
    function woocommerce_pagination(){
        echo td_page_generator::get_pagination();
    }
}


// Override theme default specification for product 3 per row
function td_wc_loop_shop_columns( $number_columns ) {
	return 3;
}
add_filter( 'loop_shop_columns', 'td_wc_loop_shop_columns', 1, 10 );

// Number of product per page 6
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 6;' ));


if (!function_exists('woocommerce_output_related_products')) {
    // Number of related products
    function woocommerce_output_related_products() {
        woocommerce_related_products(array(
            'posts_per_page' => 3,
            'columns'        => 3,
            'orderby'        => 'rand',
        )); // Display 3 products in rows of 1
    }
}





// for debugging, see all hooks
//add_action( 'all', create_function( '', 'var_dump( current_filter() );' ) );
