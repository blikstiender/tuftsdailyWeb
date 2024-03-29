<?php

class td_module_slide extends td_module {


    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function get_title_main() {
        $buffy = '';

        $buffy .= '<div class="td-sbig-title-wrap">';
        $buffy .='<a class="noSwipe" itemprop="url" href="' . $this->href . '" rel="bookmark" title="' . $this->title_attribute . '">';
        $buffy .= $this->get_title(25);
        $buffy .='</a>';
        $buffy .= '</div>';

        return $buffy;
    }

    function render($td_column_number, $td_post_count, $td_unique_id_slide) {
        $buffy = '';

        $buffy .= '<div id="' . $td_unique_id_slide . '_item_' . $td_post_count . '" class = "' . $this->get_module_classes() . ' td-image-gradient" ' . $this->get_item_scope()  . '>';
        switch ($td_column_number) {
            case '1': //one column layout
                $buffy .= $this->get_image('td_300x350');
                break;
            case '2': //two column layout
                $buffy .= $this->get_image('td_640x350');
                break;
            case '3': //three column layout
                $buffy .= $this->get_image('td_1021x580');
                break;
        }

            $buffy .= '<div class="slide-meta ">';
                if (td_util::get_option('tds_category_module_slide') == 'yes') {
                    $buffy .= '<span class="slide-meta-cat">';
                    $buffy .= $this->get_category();
                    $buffy .= '</span>';
                }
                $buffy .=  $this->get_title(25);//$this->get_title_main();
                $buffy .= '<span class="slide-meta-author">';
                    $buffy .= $this->get_author();
                    $buffy .= $this->get_date();
                    $buffy .= '<div class="td-slide-views"><i class="td-icon-views"></i>' . td_page_views::get_page_views($this->post->ID) . '</div>';
                    $buffy .= $this->get_comments();
                $buffy .= '</span>';
            $buffy .= '</div>';

        $buffy .= '</div>';

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
            $buffy .= '<a href="' . get_category_link($selected_category_obj->cat_ID) . '">'  . $selected_category_obj->name . '</a>' ;
        }

        //return print_r($post, true);
        return $buffy;
    }


    //overwrite the default function from td_module.php
    function get_comments() {
        $buffy = '';
        if (td_util::get_option('tds_p_show_comments') != 'hide') {
            $buffy .= '<div class="td-slide-comments"><i class="td-icon-comments"></i>';
            $buffy .= '<a href="' . get_comments_link($this->post->ID) . '">';
            $buffy .= get_comments_number($this->post->ID);
            $buffy .= '</a>';
            $buffy .= '</div>';
        }

        return $buffy;
    }
}
//td-icon-views