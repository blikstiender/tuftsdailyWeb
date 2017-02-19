<?php

/**
 * Class td_block - base class for blocks
 * v 4.0 - wp_010
 */
class td_block {
    var $block_id; // the block type
    var $block_uid; // the block unique id, it changes on every render

    var $atts; //the atts used for rendering the current block
    var $td_query; //the query used to rendering the current block



    function __construct() {
        $this->block_id = get_class($this); // set the current block type id It is the class name of the parent block (ex: td_block_4)
        add_shortcode($this->block_id, array($this, 'render')); // add the shortcode
    }


    /**
     * the base render function. This is called by all the child classes of this class
     * this function also adds the block specific css to the buffer (for hover and stuff)
     * @param $atts
     * @return string ''
     */
    function render($atts) {
        $this->atts = $this->add_live_filter_atts($atts); //add live filter atts
        $this->block_uid = td_global::td_generate_unique_id(); //update unique id on each render
        $this->td_query = &td_data_source::get_wp_query($this->atts); //by ref do the query


        /**
         * if we have an header color, add an unique class to this block and also add the css in the buffer
         *  - also does not add the class and color on specific blocks
         */
        if (!empty($atts['header_color']) and $this->block_id != 'td_block_14' and $this->block_id != 'td_slide') {

            $unique_block_class = $this->block_uid . '_inline';

            if (!empty($this->atts['class'])) {
                $this->atts['class'] = $this->atts['class'] . ' ' . $unique_block_class;
            } else {
                $this->atts['class'] = $unique_block_class;
            }

            $raw_css = "
                <style>
                    /* @header_color */
                    .$unique_block_class .td_module_wrap:hover .entry-title a {
                        color: @header_color;
                    }

                    .$unique_block_class .td-next-prev-wrap a:hover i {
                        background-color: @header_color;
                        border-color: @header_color;
                    }
                    .$unique_block_class .td_module_wrap .td-post-category:hover {
                        background-color: @header_color;
                    }

                    .$unique_block_class .td-pulldown-filter-display-option:hover {
                        color: @header_color !important;
                    }

                    .$unique_block_class a.td-pulldown-filter-link:hover {
                        color: @header_color !important;
                    }
                </style>
            ";

            if (strtolower($atts['header_color']) != 'ffffff' and strtolower($atts['header_color']) != '#ffffff') {
                $td_css_compiler = new td_css_compiler($raw_css);
                $td_css_compiler->load_setting_raw('header_color', $atts['header_color']);

                /**
                 * this outputs the custom style for this block  scoped - http://www.w3schools.com/tags/att_style_scoped.asp
                 */
                $buffy = '<style scoped>';
                $buffy .= $td_css_compiler->compile_css();
                $buffy .= '</style>';
                echo $buffy;
            }



        }

        return '';
    }


    /**
     * this function adds the live filters atts (for example the current category or the current post)
     * @param $atts
     * @return mixed
     */
    function add_live_filter_atts($atts) {
        if (!empty($atts['live_filter'])) {
            $atts['live_filter_cur_post_id'] = get_queried_object_id(); //add the current post id
            $atts['live_filter_cur_post_author'] =  get_post_field( 'post_author', $atts['live_filter_cur_post_id']); //get the current author
        }
        return $atts;
    }



    /**
     * Used by blocks that need auto generated titles
     * @return string
     */
    function get_block_title() {
        extract(shortcode_atts(
            array(
                'custom_title' => '',
                'custom_url' => '',
                'header_color' => '',
                'header_text_color' => '',
                'title_style' => '',
                'hide_title' => '' // @todo it may be not needed
            ),$this->atts));


        if (empty($custom_title)) {
            //no title selected, and no default title - do nothing
            return;
        }



        //custom colors
        $td_header_color_css = '';
        $td_header_text_color_css_class = '';


        if (!empty($header_text_color) and $header_text_color != '#') {
            $td_header_text_color_css_class = '; color:' . $header_text_color . ' !important';
        }

        if (!empty($header_color) and $header_color != '#') { //# is a fix for farbtastic
            $td_header_color_css = 'background-color:' . $header_color . '';
        }

        //append to the color_css the text color
        if (!empty($td_header_text_color_css_class)) {
            $td_header_color_css .= $td_header_text_color_css_class;
        }

        //wrap the header css
        if (!empty($td_header_color_css)) {
            $td_header_color_css = 'style="' . $td_header_color_css . '" ';
        }
        //end custom colors

        //print_r($td_header_text_color_css_class);

        $buffy = '';

        $title = '';
        $url = '';

        if ($hide_title != 'hide_title') {
            // read the custom url and title from the shortcode
            if (!empty($custom_title)) {
                $title = $custom_title;
            }

            if (!empty($custom_url)) {
                $url = $custom_url;
            }

            $css_buffer = '';
            if (!empty($title_style)) {
                $css_buffer = ' ' . $title_style;
            }

            $buffy .= '<h4 class="block-title' . $css_buffer . '">';
            if (!empty($url)) {
                $buffy .= '<a ' . $td_header_color_css . 'href="' . $url . '">' . $title . '</a>';
            } else {
                $buffy .= '<span ' . $td_header_color_css . '>' . $title . '</span>';
            }
            $buffy .= '</h4>';

        }

        return $buffy;
    }


    /**
     * shows a pull down filter based on the $this->atts
     * @return string
     */
    function get_pull_down_filter() {
        extract(shortcode_atts(
            array(
                'limit' => 5,
                'sort' => '',
                'category_id' => '',
                'category_ids' => '',
                'custom_title' => '',
                'custom_url' => '',
                'hide_title' => '',
                'show_child_cat' => '', //if empty, no child cats. If number show the number of child cats. If all show all of them ;)

                'td_ajax_filter_type' => '',
                'td_ajax_filter_ids' => '',
                'td_filter_default_txt' => 'All'

            ),$this->atts));


        $buffy = '';

        if (!empty($td_ajax_filter_type)) {

            $td_pull_down_items = array();

            // make the default current pull down item (the first one is the default)
            $td_pull_down_items[0] = array (
                'name' => $td_filter_default_txt,
                'id' => ''
            );


            switch($td_ajax_filter_type) {
                case 'td_category_ids_filter': // by category
                    $td_categories = get_categories(array(
                        'include' => $td_ajax_filter_ids
                    ));

                    foreach ($td_categories as $td_category) {
                        $td_pull_down_items []= array (
                            'name' => $td_category->name,
                            'id' => $td_category->cat_ID,
                        );
                    }

                    return $this->generate_pull_down($td_pull_down_items);
                    break;


                case 'td_author_ids_filter': // by author
                    $td_authors = get_users(array('who' => 'authors', 'include' => $td_ajax_filter_ids));

                    foreach ($td_authors as $td_author) {
                        $td_pull_down_items []= array (
                            'name' => $td_author->display_name,
                            'id' => $td_author->ID,
                        );
                    }
                    return $this->generate_pull_down($td_pull_down_items);
                    break;


                case 'td_tag_slug_filter': // by tag slug
                    $td_tags = get_tags(array(
                        'include' => $td_ajax_filter_ids
                    ));

                    foreach ($td_tags as $td_tag) {
                        $td_pull_down_items []= array (
                            'name' => $td_tag->name,
                            'id' => $td_tag->term_id,
                        );
                    }

                    return $this->generate_pull_down($td_pull_down_items);
                    break;


                case 'td_popularity_filter_fa': // by popularity


                    $td_pull_down_items []= array (
                        'name' => __td('Featured'),
                        'id' => 'featured',
                    );


                    $td_pull_down_items []= array (
                        'name' => __td('All time popular'),
                        'id' => 'popular',
                    );
                    return $this->generate_pull_down($td_pull_down_items);
                    break;


            }
        }


        return $buffy;
    }

    /**
     * Returns a pull down
     * @param $td_pull_down_items =
     * array (
     *   id
     *   name
     * )
     * @return string
     */
    private function generate_pull_down($td_pull_down_items) {
        $buffy = '';

        //generate unique id for this pull down filter control
        $pull_down_wrapper_id = "td_pulldown_" . $this->block_uid;

        $buffy .= '<div class="td-wrapper-pulldown-filter" id="' . $pull_down_wrapper_id . '">';
            $buffy .= '<div class="td-pulldown-filter-display-option" id="' . $pull_down_wrapper_id . '_display" data-td_block_id="' . $this->block_uid . '">';


                //show the default display valuea
                $buffy .= '<div id="td-pulldown-' . $this->block_uid . '-val"><span>';
                    $buffy .=  $td_pull_down_items[0]['name'] . ' </span><i class="td-icon-menu-down"></i>';
                $buffy .= '</div>';

                //builde the dropdown
                $buffy .= '<ul class="td-pulldown-filter-list" id="' . $pull_down_wrapper_id . '_list">';
                    foreach ($td_pull_down_items as $item) {
                        $buffy .= '<li class="td-pulldown-filter-item"><a class="td-pulldown-filter-link" id="' . td_global::td_generate_unique_id() . '" data-td_filter_value="' . $item['id'] . '" data-td_block_id="' . $this->block_uid . '" href="#">' . $item['name'] . '</a></li>';
                    }
                $buffy .= '</ul>';

            $buffy .= '</div>';  // /.td-pulldown-filter-display-option
        $buffy .= '</div>';

        return $buffy;
/**
     * @return string
     */
        }


    function get_block_pagination() {
        extract(shortcode_atts(
            array(
                'limit' => 5,
                'sort' => '',
                'category_id' => '',
                'category_ids' => '',
                'custom_title' => '',
                'custom_url' => '',
                'show_child_cat' => '',
                'sub_cat_ajax' => '',
                'ajax_pagination' => ''
            ),$this->atts));

        $buffy = '';

        switch ($ajax_pagination) {

            case 'next_prev':
                    $buffy .= '<div class="td-next-prev-wrap">';
                    $buffy .= '<a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '"><i class="td-icon-font td-icon-menu-left"></i></a>';

                    if ($this->td_query->found_posts <= $limit) {
                        //hide next page because we don't have enough results
                        $buffy .= '<a href="#"  class="td-ajax-next-page ajax-page-disabled" id="next-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '"><i class="td-icon-font td-icon-menu-right"></i></a>';
                    } else {
                        $buffy .= '<a href="#"  class="td-ajax-next-page" id="next-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '"><i class="td-icon-font td-icon-menu-right"></i></a>';
                    }

                    $buffy .= '</div>';
                break;

            case 'load_more':
                $buffy .= '<div class="td-load-more-wrap">';
                $buffy .= '<a href="#" class="td_ajax_load_more" id="next-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '">' . __td('Load more');
                $buffy .= '<i class="td-icon-font td-icon-menu-down"></i>';
                $buffy .= '</a>';
                $buffy .= '</div>';
                break;

            case 'infinite':
                $buffy .= '<div class="td_ajax_infinite" id="next-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '">';
                $buffy .= ' ';
                $buffy .= '</div>';



                $buffy .= '<div class="td-load-more-wrap td-load-more-infinite-wrap" id="infinite-lm-' . $this->block_uid . '">';
                $buffy .= '<a href="#" class="td_ajax_load_more" id="next-page-' . $this->block_uid . '" data-td_block_id="' . $this->block_uid . '">' . __td('Load more');
                $buffy .= '<i class="td-icon-font td-icon-menu-down"></i>';
                $buffy .= '</a>';
                $buffy .= '</div>';
                break;

        }

        return $buffy;
    }




    function get_block_js() {

        //get the js for this block - do not load it in inline mode in visual composer
        if (td_util::vc_is_inline()) {
            return '';
        }

        extract(shortcode_atts(
            array(
                'limit' => 5,
                'sort' => '',
                'category_id' => '',
                'category_ids' => '',
                'custom_title' => '',
                'custom_url' => '',
                'show_child_cat' => '',
                'sub_cat_ajax' => '',
                'ajax_pagination' => '',
                'header_color' => '',
                'ajax_pagination_infinite_stop' => ''
            ),$this->atts));


        if (!empty($this->atts['custom_title'])) {
            $this->atts['custom_title'] = htmlspecialchars($this->atts['custom_title'], ENT_QUOTES );
        }

        if (!empty($this->atts['custom_url'])) {
            $this->atts['custom_url'] = htmlspecialchars($this->atts['custom_url'], ENT_QUOTES );
        }


        $td_column_number = td_util::vc_get_column_number(); // get the column width of the block so we can sent it to the server
        $block_item = 'block_' . $this->block_uid;

        $buffy = '';

        $buffy .= '<script>';
        $buffy .= 'var ' . $block_item . ' = new td_block();' . "\n";
        $buffy .= $block_item . '.id = "' . $this->block_uid . '";' . "\n";
        $buffy .= $block_item . ".atts = '" . json_encode($this->atts) . "';" . "\n";
        $buffy .= $block_item . '.td_column_number = "' . $td_column_number . '";' . "\n";
        $buffy .= $block_item . '.block_type = "' . $this->block_id . '";' . "\n";

        //wordpress wp query parms
        $buffy .= $block_item . '.post_count = "' . $this->td_query->post_count . '";' . "\n";
        $buffy .= $block_item . '.found_posts = "' . $this->td_query->found_posts . '";' . "\n";
        $buffy .= $block_item . '.max_num_pages = "' . $this->td_query->max_num_pages . '";' . "\n";
        $buffy .= $block_item . '.header_color = "' . $header_color . '";' . "\n";
        $buffy .= $block_item . '.ajax_pagination_infinite_stop = "' . $ajax_pagination_infinite_stop . '";' . "\n";


        $buffy .= 'td_blocks.push(' . $block_item . ');' . "\n";
        $buffy .= '</script>';

        return $buffy;
    }

    /**
     * @param $additional_classes_array - array of classes to add to the block
     * @return string
     */
    function get_block_classes($additional_classes_array = '') {
        $color_preset = '';

        extract(shortcode_atts(
            array(
                'color_preset' => '',
                'border_top' => '',
                'class' => '', //add additional classes via short code - used by the widget builder to add the td_block_widget class
            ),$this->atts));


        //add the block wrap and block id class
        $block_classes = array(
            'td_block_wrap',
            $this->block_id
        );

        //add the classes that we receive via shortcode
        if (!empty($class)) {
            $class_array = explode(' ', $class);
            $block_classes = array_merge(
                $block_classes,
                $class_array
            );
        }

        //marge the additional classes received from blocks code
        if ($additional_classes_array != '') {
            $block_classes = array_merge(
                $block_classes,
                $additional_classes_array
            );
        }


        //add the full cell class + the color preset class
        if (!empty($color_preset)) {
            $block_classes[]= 'td-pb-full-cell';
            $block_classes[]= $color_preset;
        }


        /**
         * add the border top class - this one comes from the atts
         */
        if (empty($border_top)) {
            $block_classes[]= 'td-pb-border-top';
        }


        //remove duplicates
        $block_classes = array_unique($block_classes);


        return implode(' ', $block_classes);
    }





}

