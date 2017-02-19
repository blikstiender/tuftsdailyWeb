<?php

/**
 * Class td_module_single
 */

class td_module_single extends td_module {

    var $td_post_theme_settings;

    var $is_single; //true if we are on a single page



    function __construct($post = '') {

        //run the parent constructor
        parent::__construct($post);

        //read post settings
        $this->td_post_theme_settings = get_post_meta($post->ID, 'td_post_theme_settings', true);

        $this->is_single = is_single();
    }




    function get_social_sharing_top() {
        if (!$this->is_single) {
            return;
        }

        if (td_util::get_option('tds_top_social_show') == 'hide' and td_util::get_option('tds_top_like_tweet_show') != 'show') {
            return;
        }

	    // used to style the sharing icon to be big on tablet
	    $td_no_like = '';
	    if (td_util::get_option('tds_top_like_tweet_show') == 'show') {
		    $td_no_like = 'td-with-like';
	    }

        $buffy = '';

        // @todo single-post-thumbnail appears to not be in used! please check
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $this->post->ID ), 'single-post-thumbnail' );

        $twitter_user = td_util::get_option('tds_tweeter_username');


        $buffy .= '<div class="td-post-sharing td-post-sharing-top td-pb-padding-side"><span class="td-post-share-title">' . __td('SHARE') . '</span>';

	        if (td_util::get_option('tds_top_social_show') != 'hide') {
		        $buffy .= '
				<div class="td-default-sharing ' . $td_no_like . '">
		            <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=' . urlencode( esc_url( get_permalink() ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-facebook"></div><div class="td-social-but-text">Facebook</div></a>
		            <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=' . htmlspecialchars(urlencode(html_entity_decode($this->title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8') . '&url=' . urlencode( esc_url( get_permalink() ) ) . '&via=' . urlencode( $twitter_user ? $twitter_user : get_bloginfo( 'name' ) ) . '"  ><div class="td-sp td-sp-twitter"></div><div class="td-social-but-text">Twitter</div></a>
		            <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=' . esc_url( get_permalink() ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-googleplus"></div></a>
		            <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=' . esc_url( get_permalink() ) . '&amp;media=' . ( ! empty( $image[0] ) ? $image[0] : '' ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-pinterest"></div></a>
	            </div>';
	        }


            if (td_util::get_option('tds_top_like_tweet_show') == 'show') {
                //classic share buttons
                $buffy .= '<div class="td-classic-sharing">';
                    $buffy .= '<ul>';

                    $buffy .= '<li class="td-classic-facebook">';
                    $buffy .= '<iframe frameBorder="0" src="' . td_global::$http_or_https . '://www.facebook.com/plugins/like.php?href=' . $this->href . '&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>';
                    $buffy .= '</li>';

                    $buffy .= '<li class="td-classic-twitter">';
                    $buffy .= '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . esc_attr($this->href) . '" data-text="' . $this->title . '" data-via="' . td_util::get_option('tds_' . 'social_twitter') . '" data-lang="en">tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
                    $buffy .= '</li>';

                    $buffy .= '</ul>';
                $buffy .= '</div>';
            }

        $buffy .= '</div>';

        return $buffy;
    }


    function get_social_sharing_bottom() {
        if (!$this->is_single) {
            return;
        }

        if (td_util::get_option('tds_bottom_social_show') == 'hide' and td_util::get_option('tds_bottom_like_tweet_show') == 'hide') {
            return;
        }

	    // used to style the sharing icon to be big on tablet
	    $td_no_like = '';
	    if (td_util::get_option('tds_bottom_like_tweet_show') != 'hide') {
		    $td_no_like = 'td-with-like';
	    }

        $buffy = '';
        // @todo single-post-thumbnail appears to not be in used! please check
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $this->post->ID ), 'single-post-thumbnail' );
        $buffy .= '<div class="td-post-sharing td-post-sharing-bottom td-pb-padding-side"><span class="td-post-share-title">' . __td('SHARE') . '</span>';


	    if (td_util::get_option('tds_bottom_social_show') != 'hide') {
		    $twitter_user = td_util::get_option( 'tds_tweeter_username' );

		    //default share buttons
		    $buffy .= '
            <div class="td-default-sharing ' . $td_no_like . '">
	            <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=' . urlencode( esc_url( get_permalink() ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-facebook"></div><div class="td-social-but-text">Facebook</div></a>
	            <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=' . htmlspecialchars(urlencode(html_entity_decode($this->title, ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8') . '&url=' . urlencode( esc_url( get_permalink() ) ) . '&via=' . urlencode( $twitter_user ? $twitter_user : get_bloginfo( 'name' ) ) . '"><div class="td-sp td-sp-twitter"></div><div class="td-social-but-text">Twitter</div></a>
	            <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=' . esc_url( get_permalink() ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-googleplus"></div></a>
	            <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=' . esc_url( get_permalink() ) . '&amp;media=' . ( ! empty( $image[0] ) ? $image[0] : '' ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><div class="td-sp td-sp-pinterest"></div></a>
            </div>';
	    }


        if (td_util::get_option('tds_bottom_like_tweet_show') != 'hide') {
            //classic share buttons
            $buffy .= '<div class="td-classic-sharing">';
	            $buffy .= '<ul>';

	            $buffy .= '<li class="td-classic-facebook">';
	            $buffy .= '<iframe frameBorder="0" src="' . td_global::$http_or_https . '://www.facebook.com/plugins/like.php?href=' . $this->href . '&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>';
	            $buffy .= '</li>';

	            $buffy .= '<li class="td-classic-twitter">';
	            $buffy .= '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . esc_attr($this->href) . '" data-text="' . $this->title . '" data-via="' . td_util::get_option('tds_' . 'social_twitter') . '" data-lang="en">tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	            $buffy .= '</li>';

	            $buffy .= '</ul>';
            $buffy .= '</div>';
        }





        $buffy .= '</div>';

        return $buffy;
    }





    function get_post_pagination() {
        if (!$this->is_single) {
            return;
        }


        return wp_link_pages(array(
            'before' => '<div class="page-nav page-nav-post td-pb-padding-side">',
            'after' => '</div>',
            'link_before' => '<div>',
            'link_after' => '</div>',
            'echo' => false,
            'nextpagelink'     => '<i class="td-icon-menu-right"></i>',
            'previouspagelink' => '<i class="td-icon-menu-left"></i>'
        ));
    }

    function get_title($excerpt_lenght = '') {
        //just use h1 instead of h3
        $var_single = 0;
        if (is_single()) {
            $var_single = 1;
        }

        $buffy = '';
        $buffy .= '<h1 itemprop="name" class="entry-title">';

        if ($var_single == 0) {
            $buffy .='<a itemprop="url" href="' . $this->href . '" rel="bookmark" title="' . $this->title_attribute . '">';
        }

        $buffy .= $this->title;

        if ($var_single == 0) {
            $buffy .='</a>';
        }

        $buffy .= '</h1>';
        return $buffy;
    }

    //$show_stars_on_review - not used
    function get_author() {
        $buffy = '';
        if (td_util::get_option('tds_p_show_author_name') != 'hide') {
            $buffy .= '<div class="td-post-author-name">' . __td('By') . ' ';
            $buffy .= '<a itemprop="author" href="' . get_author_posts_url($this->post->post_author) . '">' . get_the_author_meta('display_name', $this->post->post_author) . '</a>' ;

            if (td_util::get_option('tds_p_show_author_name') != 'hide' and td_util::get_option('tds_p_show_date') != 'hide') {
                $buffy .= ' - ';
            }
            $buffy .= '</div>';
        }
        return $buffy;
    }


    /**
     * v3
     * @param $thumbType
     * @param string $image_link - not used ( just to comply with wp_debug strict )
     * @param string $image_excerpt - not used
     * @param string $featured_image_placeholder - not used
     * @return string - not used
     */
    function get_image($thumbType, $image_link = '', $image_excerpt = '', $featured_image_placeholder = '') {
        global $page;

        //show only on the first page when we have posts with pages
        if (!empty($page) and $page > 1) {
            return;
        }

        //do not show the featured image if the global setting is set to hide - show the video preview regardless of the setting
        if (td_util::get_option('tds_show_featured_image') == 'hide' and get_post_format($this->post->ID) != 'video') {
            return;
        }


        //handle video post format
        if (get_post_format($this->post->ID) == 'video') {
            //if it's a video post...
            $td_post_video = get_post_meta($this->post->ID, 'td_post_video', true);
            $td_video_support = new td_video_support();

            //render the video if the post has a video in the featured video section of the post
            if (!empty($td_post_video['td_video'])) {
                return $td_video_support->renderVideo($td_post_video['td_video']);
            }
        } else {
            //if it's a normal post, show the default thumb

            if ($this->post_has_thumb) {
                //get the featured image id + full info about the 640px wide one
                $featured_image_id = get_post_thumbnail_id($this->post->ID);
                $featured_image_info = td_util::attachment_get_full_info($featured_image_id, $thumbType);

                //get the full size for the popup
                $featured_image_full_size_src = td_util::attachment_get_src($featured_image_id, 'full');

                $buffy = '';

                $show_td_modal_image = td_util::get_option('tds_featured_image_view_setting') ;

                if (is_single()) {
                    if ($show_td_modal_image != 'no_modal') {
                        //wrap the image_html with a link + add td-modal-image class
                    $image_html = '<a href="' . $featured_image_full_size_src['src'] . '" data-caption="' . esc_attr($featured_image_info['caption'], ENT_QUOTES) . '">';
                    $image_html .= '<img width="' . $featured_image_info['width'] . '" height="' . $featured_image_info['height'] . '" itemprop="image" class="entry-thumb td-modal-image" src="' . $featured_image_info['src'] . '" alt="' . $featured_image_info['alt']  . '" title="' . $featured_image_info['title'] . '"/>';
                    $image_html .= '</a>';
                    } else { //no_modal
                    $image_html = '<img width="' . $featured_image_info['width'] . '" height="' . $featured_image_info['height'] . '" itemprop="image" class="entry-thumb" src="' . $featured_image_info['src'] . '" alt="' . $featured_image_info['alt']  . '" title="' . $featured_image_info['title'] . '"/>';
                }
                } else {
                    //on blog index page
                    $image_html = '<a href="' . $this->href . '"><img width="' . $featured_image_info['width'] . '" height="' . $featured_image_info['height'] . '" itemprop="image" class="entry-thumb" src="' . $featured_image_info['src'] . '" alt="' . $featured_image_info['alt']  . '" title="' . $featured_image_info['title'] . '"/></a>';
                }


                $buffy .= '<div class="td-post-featured-image">';

                // caption - put html5 wrapper on when we have a caption
                if (!empty($featured_image_info['caption'])) {
                    $buffy .= '<figure>';
                    $buffy .= $image_html;

                    $buffy .= '<figcaption class="wp-caption-text">' . $featured_image_info['caption'] . '</figcaption>';
                    $buffy .= '</figure>';
                } else {
                    $buffy .= $image_html;
                }

                $buffy .= '</div>';


                return $buffy;
            } else {
                return ''; //the post has no thumb
            }
        }
    }


    function get_category() {

        $buffy = '';
	    if (td_util::get_option('tds_p_categories_tags') != 'hide') {
		    $buffy .= '<ul class="td-category">';
		    $categories = get_the_category( $this->post->ID );
		    $cat_array  = array();

		    if ( $categories ) {
			    foreach ( $categories as $category ) {
				    if ( $category->name != TD_FEATURED_CAT ) { //ignore the featured category name
					    //get the parent of this cat
					    $td_parent_cat_obj = get_category( $category->category_parent );

					    //if we have a parent, shot it first
					    if ( ! empty( $td_parent_cat_obj->name ) ) {
						    $tax_meta__color_parent                = td_util::get_category_option( $td_parent_cat_obj->cat_ID, 'tdc_color' );//swich by RADU A, get_tax_meta($td_parent_cat_obj->cat_ID,'tdc_color');
						    $tax_meta__hide_on_post_parent         = td_util::get_category_option( $td_parent_cat_obj->cat_ID, 'tdc_hide_on_post' );//swich by RADU A, get_tax_meta($td_parent_cat_obj->cat_ID,'tdc_hide_on_post');
						    $cat_array[ $td_parent_cat_obj->name ] = array(
							    'color'        => $tax_meta__color_parent,
							    'link'         => get_category_link( $td_parent_cat_obj->cat_ID ),
							    'hide_on_post' => $tax_meta__hide_on_post_parent
						    );
					    }

					    //show the category, only if we didn't already showed the parent
					    $tax_meta_color                = td_util::get_category_option( $category->cat_ID, 'tdc_color' );//swich by RADU A, get_tax_meta($category->cat_ID,'tdc_color');
					    $tax_meta__hide_on_post_parent = td_util::get_category_option( $category->cat_ID, 'tdc_hide_on_post' );//swich by RADU A, get_tax_meta($category->cat_ID,'tdc_hide_on_post');
					    $cat_array[ $category->name ]  = array(
						    'color'        => $tax_meta_color,
						    'link'         => get_category_link( $category->cat_ID ),
						    'hide_on_post' => $tax_meta__hide_on_post_parent
					    );
				    }
			    }
		    }

		    foreach ( $cat_array as $td_cat_name => $td_cat_parms ) {
			    if ( $td_cat_parms['hide_on_post'] == 'hide' ) {
				    continue;
			    }

			    if ( ! empty( $td_cat_parms['color'] ) ) {
				    $td_cat_color = ' style="background-color:' . $td_cat_parms['color'] . ';"';
			    } else {
				    $td_cat_color = '';
			    }


			    $buffy .= '<li class="entry-category"><a ' . $td_cat_color . ' href="' . $td_cat_parms['link'] . '">' . $td_cat_name . '</a></li>';
		    }
		    $buffy .= '</ul>';
	    }

        return $buffy;
    }









    function get_comments() {
        $buffy = '';
        if (td_util::get_option('tds_p_show_comments') != 'hide') {
            $buffy .= '<div class="td-post-comments">';
                $buffy .= '<a href="' . get_comments_link($this->post->ID) . '"><i class="td-icon-comments"></i>';
                $buffy .= get_comments_number($this->post->ID);
                $buffy .= '</a>';
            $buffy .= '</div>';
        }

        return $buffy;
    }

    function get_views() {
        $buffy = '';
        if (td_util::get_option('tds_p_show_views') != 'hide') {
            $buffy .= '<div class="td-post-views">';
                $buffy .= '<i class="td-icon-views"></i>';
                    // WP-Post Views Counter
                    if (function_exists('the_views')) {
                        $post_views = the_views(false);
                        $buffy .= $post_views;
                    }
                    // Default Theme Views Counter
                    else {
                        $buffy .= '<span class="td-nr-views-' . $this->post->ID . '">' . td_page_views::get_page_views($this->post->ID) .'</span>';
                    }

                $buffy .= '</div>';
        }
        return $buffy;
    }



    function get_content() {

        /*  ----------------------------------------------------------------------------
            Prepare the content
        */
        $content = get_the_content(__td('Continue', TD_THEME_NAME));
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);



        /*  ----------------------------------------------------------------------------
            Smart list support
         */
        $td_smart_list = get_post_meta($this->post->ID, 'td_smart_list', true);
        if (!empty($td_smart_list['smart_list_template'])) {

            $td_smart_list_class = $td_smart_list['smart_list_template'];
            if (class_exists($td_smart_list_class)) {
                $td_smart_list_obj = new $td_smart_list_class();  // make the class from string * magic :)
                return $td_smart_list_obj->render_from_post_content($content);
            } else {
                // there was an error?
                td_util::error(__FILE__, 'Missing smart list: ' . $td_smart_list_class);
            }
        }
        /*  ----------------------------------------------------------------------------
            end smart list - if we have a list, the function returns above
         */




        /*  ----------------------------------------------------------------------------
            ad support on content
        */

        //read the current ad settings
        $tds_inline_ad_paragraph = td_util::get_option('tds_inline_ad_paragraph');
        $tds_inline_ad_align = td_util::get_option('tds_inline_ad_align');


        //add the inline ad
        if (td_util::is_ad_spot_enabled('content_inline') and is_single() ) {

            if (empty($tds_inline_ad_paragraph)) {
                $tds_inline_ad_paragraph = 0;
            }

            $cnt = 0;
            $content_buffer = ''; // we replace the content with this buffer at the end
            $content_parts = explode('<p>', $content);

            foreach ($content_parts as $content_part) {
                if (!empty($content_part)) {

                    if ($tds_inline_ad_paragraph == $cnt) {
                        //it's time to show the ad
                        switch ($tds_inline_ad_align) {
                            case 'left':
                                $content_buffer .= td_global_blocks::get_instance('td_ad_box')->render(array('spot_id' => 'content_inline', 'align' => 'left'));
                                break;

                            case 'right':
                                $content_buffer .= td_global_blocks::get_instance('td_ad_box')->render(array('spot_id' => 'content_inline', 'align' => 'right'));
                                break;

                            default:

                                $content_buffer .= td_global_blocks::get_instance('td_ad_box')->render(array('spot_id' => 'content_inline'));
                                break;
                        }

                    }
                    $content_buffer .= '<p>' . $content_part;
                    $cnt++;
                }
            }
            $content = $content_buffer;
        }

        //add the top ad
        if (td_util::is_ad_spot_enabled('content_top') and is_single()) {
            $content = td_global_blocks::get_instance('td_ad_box')->render(array('spot_id' => 'content_top')) . $content;
        }


        //add bottom ad
        if (td_util::is_ad_spot_enabled('content_bottom') and is_single()) {
            $content = $content . td_global_blocks::get_instance('td_ad_box')->render(array('spot_id' => 'content_bottom'));
        }


        return $content;
    }





    /*  ----------------------------------------------------------------------------
        Single page
     */
    function get_review() {
        if (!$this->is_single) {
            return;
        }

        if (td_review::has_review($this->td_review)) {
            //print_r($this->td_review);
            $buffy = '';
            $buffy .= td_review::render_table($this->td_review);



            return $buffy;
        }

    }

    function get_source_and_via() {
        if (!$this->is_single) {
            return;
        }


        $buffy ='';

        //via and source
        if (!empty($this->td_post_theme_settings['td_source']) or !empty($this->td_post_theme_settings['td_via'])) {
	        $via_url = '#';
	        $source_url = '#';

	        if (!empty($this->td_post_theme_settings['td_via_url'])) {
		        $via_url = $this->td_post_theme_settings['td_via_url'];
	        }

	        if (!empty($this->td_post_theme_settings['td_source_url'])) {
		        $source_url = $this->td_post_theme_settings['td_source_url'];
	        }

            $buffy .= '<div class="td-post-source-via">';
            if (!empty($this->td_post_theme_settings['td_via'])) {
                $buffy .= '<div class="td-post-small-box"><span>' . __td('VIA') . '</span><a rel="nofollow" href="' . $via_url . '">' . $this->td_post_theme_settings['td_via'] . '</a></div>';
            }

            if (!empty($this->td_post_theme_settings['td_source'])) {
                $buffy .= '<div class="td-post-small-box"><span>' . __td('SOURCE') . '</span><a rel="nofollow" href="' . $source_url . '">' . $this->td_post_theme_settings['td_source'] . '</a></div>';
            }
            $buffy .= '</div>';
        }


        return $buffy;
    }


    function get_the_tags() {
        if (!$this->is_single) {
            return;
        }

        if (td_util::get_option('tds_show_tags') == 'hide') {
            return;
        }


        $buffy = '';

        $td_post_tags = get_the_tags();
        if ($td_post_tags) {
            $buffy .= '<ul class="td-tags td-post-small-box clearfix">';
            $buffy .= '<li><span>' . __td('TAGS') . '</span></li>';
            foreach ($td_post_tags as $tag) {
                $buffy .=  '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
            }
            $buffy .= '</ul>';
        }

        return $buffy;
    }

    function get_next_prev_posts() {
        if (!$this->is_single) {
            return;
        }

        if (td_util::get_option('tds_show_next_prev') == 'hide') {
            return;
        }

        $buffy = '';

        $next_post = get_next_post();
        $prev_post = get_previous_post();

        if (!empty($next_post) or !empty($prev_post)) {
            $buffy .= '<div class="td-block-row td-post-next-prev">';
            if (!empty($prev_post)) {
                $buffy .= '<div class="td-block-span6 td-post-prev-post">';
                    $buffy .= '<div class="td-post-next-prev-content"><span>' .__td('Previous article', TD_THEME_NAME) . '</span>';
                    $buffy .= '<a href="' . esc_url(get_permalink($prev_post->ID)) . '">' . $prev_post->post_title . '</a>';
                    $buffy .= '</div>';
                $buffy .= '</div>';
            } else {
                $buffy .= '<div class="td-block-span6 td-post-prev-post">';
                $buffy .= '</div>';
            }
                $buffy .= '<div class="td-next-prev-separator"></div>';
            if (!empty($next_post)) {
                $buffy .= '<div class="td-block-span6 td-post-next-post">';
                    $buffy .= '<div class="td-post-next-prev-content"><span>' .__td('Next article', TD_THEME_NAME) . '</span>';
                    $buffy .= '<a href="' . esc_url(get_permalink($next_post->ID)) . '">' . $next_post->post_title . '</a>';
                    $buffy .= '</div>';
                $buffy .= '</div>';
            }
            $buffy .= '</div>'; //end fluid row
        }

        return $buffy;
    }

    function get_author_box($author_id = '') {

        if (!$this->is_single) {
            return;
        }

        if (td_util::get_option('tds_show_author_box') == 'hide') {
            return;
        }

        if (empty($author_id)) {
            $author_id = $this->post->post_author;
        }


        $buffy = '';

        $authorDescription = get_the_author_meta('description');
        $hideAuthor = td_util::get_option('hide_author');

        if (empty($hideAuthor)) {

            $buffy .= '<div class="author-box-wrap">';
                $buffy .= '<a itemprop="author" href="' . get_author_posts_url($author_id) . '">' ;
                $buffy .= get_avatar(get_the_author_meta('email', $author_id), '106');
                $buffy .= '</a>';


                $buffy .= '<div class="desc">';
                    $buffy .= '<div class="td-author-name">';
                    $buffy .= '<a itemprop="author" href="' . get_author_posts_url($author_id) . '">' . get_the_author_meta('display_name', $author_id) . '</a>' ;
                    $buffy .= '</div>';

                    if (get_the_author_meta('user_url', $author_id) != '') {
                        $buffy .= '<div class="td-author-url"><a href="' . get_the_author_meta('user_url', $author_id) . '">' . get_the_author_meta('user_url', $author_id) . '</a></div>';
                    }

                    $buffy .= '<div class="vcard author"><span class="fn">';
                    $buffy .=  get_the_author_meta('description', $author_id);
                    $buffy .= '</span></div>';


                    $buffy .= '<div class="td-author-social">';
                    foreach (td_social_icons::$td_social_icons_array as $td_social_id => $td_social_name) {
                        //echo get_the_author_meta($td_social_id) . '<br>';
                        $authorMeta = get_the_author_meta($td_social_id);
                        if (!empty($authorMeta)) {

                            //the theme can use the twitter id instead of the full url. This avoids problems with yoast plugin
                            if ($td_social_id == 'twitter') {
                                if(filter_var($authorMeta, FILTER_VALIDATE_URL)){

                                } else {
                                    $authorMeta = str_replace('@', '', $authorMeta);
                                    $authorMeta = 'http://twitter.com/' . $authorMeta;
                                }
                            }
                            $buffy .= td_social_icons::get_icon($authorMeta, $td_social_id, 4, 16);
                        }
                    }
                    $buffy .= '</div>';



                    $buffy .= '<div class="clearfix"></div>';

                $buffy .= '</div>'; ////desc
            $buffy .= '</div>'; //author-box-wrap
        }


        return $buffy;
    }


    function related_posts() {

        if (!$this->is_single) {
            return;
        }


        if (td_util::get_option('tds_similar_articles') == 'hide') {
            return;
        }




        //td_global::$cur_single_template_sidebar_pos;

        //cur_post_same_tags
        //cur_post_same_author
        //cur_post_same_categories

        if (td_util::get_option('tds_similar_articles_type') == 'by_tag') {
            $td_related_ajax_filter_type = 'cur_post_same_tags';
        } else {
            $td_related_ajax_filter_type = 'cur_post_same_categories';
        }


        if (td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
            $td_related_limit = 5;
            $td_related_class = 'td-related-full-width';
        } else {
            $td_related_limit = 3;
            $td_related_class = '';
        }

        /**
         * 'td_ajax_filter_type' => 'td_custom_related' - this ajax filter type overwrites the live filter via ajax @see td_ajax_block
         */
         $td_block_args = array (
            'limit' => $td_related_limit,
            'ajax_pagination' => 'next_prev',
            'live_filter' => $td_related_ajax_filter_type,  //live atts - this is the default setting for this block
            'td_ajax_filter_type' => 'td_custom_related', //this filter type can overwrite the live filter @see
            'class' => $td_related_class
        );


        /**
         * @see td_related_posts
         */
        return td_global_blocks::get_instance('td_related_posts')->render($td_block_args);

    }




}
