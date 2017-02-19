<?php

class td_popular_categories extends td_block {


    function render($atts){
        parent::render($atts);

        $buffy = '';

        extract(shortcode_atts(
            array(
                'limit' => '6',
                'custom_title' => '',
                'custom_url' => '',
                'hide_title' => '',
                'header_color' => ''
            ), $atts));

        $cat_args = array(
            'show_count' => true,
            'orderby' => 'count',
            'hide_empty' => false,
            'order' => 'DESC',
            'number' => $limit + 1,
            'exclude' => get_cat_ID(TD_FEATURED_CAT)
        );


        // exclude categories from the demo
        if (TD_DEPLOY_MODE == 'demo' or TD_DEPLOY_MODE == 'dev') {
            $cat_args['exclude'] = '44,45,46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 110, ' . get_cat_ID(TD_FEATURED_CAT);
        }

        $categories = get_categories($cat_args);

        $buffy .= '<div class="td_block_wrap td_popular_categories widget widget_categories">';
            $buffy .= $this->get_block_title();

            if (!empty($categories)) {
                $buffy .= '<ul class="td-pb-padding-side">';
                    foreach ($categories as $category) {
                        if (strtolower($category->cat_name) != 'uncategorized') {
                            $buffy .= '<li><a href="' . get_category_link($category->cat_ID) . '">' . $category->name . '<span class="td-cat-no">' . $category->count . '</span></a></li>';
                        }
                    }
                $buffy .= '</ul>';
            }
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

    }


    function get_map () {
        return array(
            "name" => 'Popular category',
            "base" => "td_popular_categories",
            "class" => "td_popular_categories",
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-popular_categories',
            "params" => array(
                array(
                    "param_name" => "custom_title",
                    "type" => "textfield",
                    "value" => "POPULAR CATEGORIES",
                    "heading" => 'Optional - custom title for this block:',
                    "description" => "",
                    "holder" => "div",
                    "class" => ""
                ),
                array(
                    "param_name" => "custom_url",
                    "type" => "textfield",
                    "value" => "",
                    "heading" => 'Optional - custom url for this block (when the module title is clicked):',
                    "description" => "",
                    "holder" => "div",
                    "class" => ""
                ),
                array(
                    "type" => "colorpicker",
                    "holder" => "div",
                    "class" => "",
                    "heading" => 'Header color',
                    "param_name" => "header_color",
                    "value" => '', //Default Red color
                    "description" => 'Choose a custom header color for this block'
                ),
                array(
                    "type" => "colorpicker",
                    "holder" => "div",
                    "class" => "",
                    "heading" => 'Header text color',
                    "param_name" => "header_text_color",
                    "value" => '', //Default Red color
                    "description" => 'Choose a custom header color for this block'
                ),
                array(
                    "param_name" => "limit",
                    "type" => "textfield",
                    "value" => "6",
                    "heading" => 'Limit the number of categories shown:',
                    "description" => "",
                    "holder" => "div",
                    "class" => ""
                )

            )
        );
    }

}



td_global_blocks::add_instance(new td_popular_categories());