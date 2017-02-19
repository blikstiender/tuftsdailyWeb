<?php
class td_module {
    var $post;

    var $title_attribute;
    var $title;
    var $href;


    var $td_review; //review meta




    //constructor
    function __construct($post) {

        //this filter is used by td_unique_posts.php - to add unique posts to the array for the datasource
        apply_filters("td_wp_boost_new_module", $post);

        $this->post = $post;

        $this->title = get_the_title($post->ID);
        $this->title_attribute = esc_attr(strip_tags($this->title));
        $this->href = esc_url(get_permalink($post->ID));

        if (has_post_thumbnail($this->post->ID)) {
            $this->post_has_thumb = true;
        } else {
            $this->post_has_thumb = false;
        }

        //get the review metadata
        $this->td_review = get_post_meta($this->post->ID, 'td_review', true);
    }




    final function get_item_scope() {
        if (td_review::has_review($this->td_review)) {
            return 'itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Review"';
        } else {
            return 'itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Article"';
        }
    }

    final function get_item_scope_meta() {
        $buffy = ''; //the vampire slayer

        $buffy .= '<meta itemprop="interactionCount" content="UserComments:' . get_comments_number($this->post->ID) . '"/>';

        if (td_review::has_review($this->td_review)) {
            $td_article_date_unix = get_the_time('U', $this->post->ID);

            if (!empty($this->td_review['review'])) {
                $buffy .= '<meta itemprop="about" content = "' . $this->td_review['review'] . '">';
            } else {
                //we have no review :|

                //get a damn excerpt for the metatag
                if ($this->post->post_excerpt != '') {
                    $td_post_excerpt = $this->post->post_excerpt;
                } else {
                    $td_post_excerpt = td_util::excerpt($this->post->post_content, 25);
                }
                $buffy .= '<meta itemprop="about" content = "' . $td_post_excerpt . '">';
            }

            $buffy .= '<meta itemprop="datePublished" content="' . date(DATE_W3C, $td_article_date_unix) . '">';
            $buffy .= '<span class="td-page-meta" itemprop="reviewRating" itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Rating">';
                $buffy .= '<meta itemprop="worstRating" content = "1">';
                $buffy .= '<meta itemprop="bestRating" content = "5">';
                $buffy .= '<meta itemprop="ratingValue" content = "' . td_review::calculate_total_stars($this->td_review) . '">';
            $buffy .= ' </span>';
        }
        return $buffy;
    }

    function get_module_classes() {
        //add the wrap and module id class
        $buffy = 'td_module_wrap ' . get_class($this);

        //show no thumb only if image placeholders are disabled
        if ($this->post_has_thumb === false and td_util::get_option('tds_hide_featured_image_placeholder') == 'hide_placeholder') {
            $buffy .= ' td_module_no_thumb';
        }

        return $buffy;
    }

    /* @if newspaper */
    function newspaper_get_module_classes() {
        //add the wrap and module id class
        $buffy = 'td_mod_wrap ' . str_replace('module', 'mod', get_class($this));

        //show no thumb only if image placeholders are disabled
        if ($this->post_has_thumb === false and td_util::get_option('tds_hide_featured_image_placeholder') == 'hide_placeholder') {
            $buffy .= ' td_module_no_thumb';
        }

        return $buffy;
    }
    /* @endif */


    function get_author() {
        $buffy = '';

        if (td_review::has_review($this->td_review) === false) {
            if (td_util::get_option('tds_p_show_author_name') != 'hide') {
                $buffy .= '<div class="td-post-author-name">';
                $buffy .= '<a itemprop="author" href="' . get_author_posts_url($this->post->post_author) . '">' . get_the_author_meta('display_name', $this->post->post_author) . '</a>' ;
                if (td_util::get_option('tds_p_show_author_name') != 'hide' and td_util::get_option('tds_p_show_date') != 'hide') {
                    $buffy .= ' <span>-</span> ';
                }
                $buffy .= '</div>';
            }

        }
        return $buffy;

    }


    function get_date($show_stars_on_review = true) {
        $visibility_class = '';
        if (td_util::get_option('tds_p_show_date') == 'hide') {
            $visibility_class = ' td-visibility-hidden';
        }

        $buffy = '';
        if (td_review::has_review($this->td_review) and $show_stars_on_review === true) {
            //if review show stars
            $buffy .= '<div class="entry-review-stars">';
            $buffy .=  td_review::render_stars($this->td_review);
            $buffy .= '</div>';

        } else {
            if (td_util::get_option('tds_p_show_date') != 'hide') {
                $td_article_date_unix = get_the_time('U', $this->post->ID);
                $buffy .= '<div class="td-post-date">';
                    $buffy .= '<time  itemprop="dateCreated" class="entry-date updated td-module-date' . $visibility_class . '" datetime="' . date(DATE_W3C, $td_article_date_unix) . '" >' . get_the_time(get_option('date_format'), $this->post->ID) . '</time>';
                    $buffy .= '<meta itemprop="interactionCount" content="UserComments:' . get_comments_number($this->post->ID) . '"/>';
                $buffy .= '</div>';
            }
        }

        return $buffy;
    }

    function get_comments() {
        $buffy = '';
        if (td_util::get_option('tds_p_show_comments') != 'hide') {
            $buffy .= '<div class="td-module-comments">';
                $buffy .= '<a href="' . get_comments_link($this->post->ID) . '">';
                    $buffy .= get_comments_number($this->post->ID);
                $buffy .= '</a>';
            $buffy .= '</div>';
        }

        return $buffy;
    }


    /* @if newspaper */
    function newspaper_get_commentsAndViews() {
        $buffy = '';

        $buffy .= '<div class="entry-comments-views">';
        if (td_util::get_option('tds_p_show_comments') != 'hide') {
            //$buffy .= '<a href="' . get_comments_link($this->post->ID) . '">';
            $buffy .= '<span class="td-sp td-sp-ico-comments td-fake-click" data-fake-click="' . get_comments_link($this->post->ID) . '"></span>';
            $buffy .= get_comments_number($this->post->ID);
            //$buffy .= '</a>';
        }

        if (td_util::get_option('tds_p_show_views') != 'hide') {
            $buffy .= ' ';
            $buffy .= '<span class="td-sp td-sp-ico-view"></span>';
            // WP-Post Views Counter
            if (function_exists('the_views')) {
                $post_views = the_views(false);
                $buffy .= $post_views;
            }
            // Default Theme Views Counter
            else {
                $buffy .= '<span class="td-nr-views-' . $this->post->ID . '">' . td_page_views::get_page_views($this->post->ID) .'</span>';
            }
        }
        $buffy .= '</div>';

        return $buffy;
    }
    /* @endif */


    /**
     * get image - v 2.0  20 nov
     * @param $thumbType
     * @param string $image_link
     * @param string $image_excerpt
     * @param string $featured_image_placeholder  - some modules require that we have a placeholder image @see td_module_mx1
     * @return string
     */
    function get_image($thumbType, $image_link = '', $image_excerpt = '', $featured_image_placeholder = '') {
        $buffy = ''; //the output buffer


        $show_colorbox_class = false;

        if ($featured_image_placeholder == '') {
            //read the placeholder option from the database if $featured_image_placeholder is not receive
            $featured_image_placeholder = td_util::get_option('tds_hide_featured_image_placeholder');
        }


        /*
         *  - if we have a post thumb - show that
         *  - if we don't have a post thumb, check the image placeholder option and if we're also not a single page show the image placeholder.
         */
        if ($this->post_has_thumb or $featured_image_placeholder == '') {//and !is_single()//comment this so we can have image placeholder on single post pages

            if ($image_link == '') {
                $image_link = $this->href;

            } else {
                //we are in post, only posts use $image_link
                if (td_util::get_option('tds_featured_image_view_setting') == '') {
                    if (is_single()) {
                        $show_colorbox_class = true;
                    } else {
                        $image_link = $this->href;
                        $show_colorbox_class = false;
                    }
                }

                if (td_util::get_option('tds_featured_image_view_setting') == 'lightbox') {
                    $show_colorbox_class = true;
                }


                if (td_util::get_option('tds_featured_image_view_setting') == 'no_link') {
                    $image_link = ''; //remove the link if we have that option
                }
            }


            if ($this->post_has_thumb) {

                // check to see if the thumb size is enabled in the panel
                if (td_util::get_option('tds_thumb_' . $thumbType) != 'yes' and TD_THEME_NAME == 'Newsmag') { // remove Newsmag check on newspaper 5
                    global $_wp_additional_image_sizes;

                    if (empty($_wp_additional_image_sizes[$thumbType]['width'])) {
                        $td_temp_image_url[1] = '';
                    } else {
                        $td_temp_image_url[1] = $_wp_additional_image_sizes[$thumbType]['width'];
                    }

                    if (empty($_wp_additional_image_sizes[$thumbType]['height'])) {
                        $td_temp_image_url[2] = '';
                    } else {
                        $td_temp_image_url[2] = $_wp_additional_image_sizes[$thumbType]['height'];
                    }


                    $td_temp_image_url[0] = get_template_directory_uri() . '/images/thumb-disabled/' . $thumbType . '.png';
                    $attachment_alt = '';
                    $attachment_title = '';
                } else {
                    //if we have a thumb
                    $attachment_id = get_post_thumbnail_id($this->post->ID);
                    $td_temp_image_url = wp_get_attachment_image_src($attachment_id, $thumbType);
                    $attachment_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true );
                    $attachment_alt = 'alt="' . esc_attr(strip_tags($attachment_alt)) . '"';
                    $attachment_title = ' title="' . $this->title . '"';

                    if (empty($td_temp_image_url[0])) {
                        $td_temp_image_url[0] = '';
                    }
                    if (empty($td_temp_image_url[1])) {
                        $td_temp_image_url[1] = '';
                    }
                    if (empty($td_temp_image_url[2])) {
                        $td_temp_image_url[2] = '';
                    }
                } // end panel thumb enabled check


            } else { //we have no thumb but the placeholder one is activated
                global $_wp_additional_image_sizes;

                if (empty($_wp_additional_image_sizes[$thumbType]['width'])) {
                    $td_temp_image_url[1] = '';
                } else {
                    $td_temp_image_url[1] = $_wp_additional_image_sizes[$thumbType]['width'];
                }

                if (empty($_wp_additional_image_sizes[$thumbType]['height'])) {
                    $td_temp_image_url[2] = '';
                } else {
                    $td_temp_image_url[2] = $_wp_additional_image_sizes[$thumbType]['height'];
                }

                $td_temp_image_url[0] = get_template_directory_uri() . '/images/no-thumb/' . $thumbType . '.png';
                $attachment_alt = '';
                $attachment_title = '';
            }

            $buffy .= '<div class="td-module-thumb">';
            if (current_user_can('edit_posts')) {
                $buffy .= '<a class="td-admin-edit" href="' . get_edit_post_link($this->post->ID) . '">edit</a>';
            }

            if ($image_link != '') {
                $buffy .='<a href="' . $image_link . '" rel="bookmark" title="' . $this->title_attribute . '">';
            }



            $buffy .= '<img width="' . $td_temp_image_url[1] . '" height="' . $td_temp_image_url[2] . '" itemprop="image" class="entry-thumb' . td_util::if_show($show_colorbox_class, 'td-modal-image') . '" src="' . $td_temp_image_url[0] . '" ' . $attachment_alt . $attachment_title . '/>';

            if (get_post_format($this->post->ID) == 'video') {
                if ($thumbType == 'td_100x75' or $thumbType == 'td_80x60' or $thumbType == 'thumbnail') {
                    $buffy .= '<span class="td-video-play-ico td-video-small"><img width="20" class="td-retina" src="' . get_template_directory_uri() . '/images/icons/video-small.png' . '" alt="video"/></span>';
                } else {
                    $buffy .= '<span class="td-video-play-ico"><img width="40" class="td-retina" src="' . get_template_directory_uri() . '/images/icons/ico-video-large.png' . '" alt="video"/></span>';
                }
            }

            if ($image_link != '') {
                $buffy .= '</a>';
            }

            $buffy .= $image_excerpt;

            $buffy .= '</div>';

            return $buffy;
        }
    }


    /**
     * This function returns the title with the appropriate markup.
     * @param string $cut_at - if provided, the function will look FIRST after the setting from the database get_class($this) . '_title_excerpt'
     * and it will cut after that. If not setting is in the database the function will cut at the default value
     * @return string
     */
    function get_title($cut_at = '') {
        $buffy = '';
        $buffy .= '<h3 itemprop="name" class="entry-title td-module-title">';
            $buffy .='<a itemprop="url" href="' . $this->href . '" rel="bookmark" title="' . $this->title_attribute . '">';

                //see if we have to cut the title and if we have the title lenght in the panel for ex: td_module_6__title_excerpt
                if ($cut_at != '') {
                    $db_title_excerpt = td_util::get_option(get_class($this) . '_title_excerpt');
                    if ($db_title_excerpt != '') {
                        //cut from the database settings
                        $buffy .= td_util::excerpt($this->title, $db_title_excerpt, 'show_shortcodes');
                    } else {
                        //cut at the default size
                        $buffy .= td_util::excerpt($this->title, $cut_at, 'show_shortcodes');
                    }


                } else {
                    $buffy .= $this->title;
                }
            $buffy .='</a>';
        $buffy .= '</h3>';
        return $buffy;
    }





    function get_excerpt($cut_excerpt_default = '') {

        //returns the uncut excerpt
        if ($this->post->post_excerpt != '') {
            return $this->post->post_excerpt;
        }


        $buffy = '';
        if ($cut_excerpt_default != '') {
            $db_content_excerpt = td_util::get_option(get_class($this) . '_content_excerpt');

            if ($db_content_excerpt != '') {
                //cut from the database settings
                $buffy .= td_util::excerpt($this->post->post_content, $db_content_excerpt);
            } else {
                //cut at the default size
                $buffy .= td_util::excerpt($this->post->post_content, $cut_excerpt_default);
            }
        } else {
            $buffy .= $this->post->post_content;
        }

        return $buffy;
    }



    function get_category() {
        $buffy = '';

        //read the post meta to get the custom primary category
        $td_post_theme_settings = get_post_meta($this->post->ID, 'td_post_theme_settings', true);
        if (!empty($td_post_theme_settings['td_primary_cat'])) {
            //we have a custom category selected
            $selected_category_obj = get_category($td_post_theme_settings['td_primary_cat']);
        } else {
            //get one auto
            $categories = get_the_category($this->post->ID);
            if (!empty($categories[0])) {
                if ($categories[0]->name === TD_FEATURED_CAT and !empty($categories[1])) {
                    $selected_category_obj = $categories[1];
                } else {
                    $selected_category_obj = $categories[0];
                }
            }
        }


        if (!empty($selected_category_obj)) { //@todo catch error here
            $buffy .= '<a href="' . get_category_link($selected_category_obj->cat_ID) . '" class="td-post-category">'  . $selected_category_obj->name . '</a>' ;
        }

        //return print_r($post, true);
        return $buffy;
    }


    //get quotes on blocks
    function get_quotes_on_blocks() {

        //get quotes data from database
        $post_data_from_db = get_post_meta($this->post->ID, 'td_post_theme_settings', true);

        if(!empty($post_data_from_db['td_quote_on_blocks'])) {
            return '<div class="td_quote_on_blocks">' . $post_data_from_db['td_quote_on_blocks'] . '</div>';
        }
    }
}