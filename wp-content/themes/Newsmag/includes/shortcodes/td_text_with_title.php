<?php

class td_text_with_title extends td_block {



    function render($atts) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query


        extract(shortcode_atts(
            array(
                'raw_content' => ''
            ),$this->atts));


        $td_img_first_class = '';


        $buffy = '';
        $buffy .= '<div class="td_block_wrap td_text_with_title' . $td_img_first_class . '">';
            $buffy .= $this->get_block_title();


            $buffy .= '<div class="td_mod_wrap">';

                //only run the filter if we have visual composer
                if (function_exists('wpb_js_remove_wpautop')) {
                    $buffy .= wpb_js_remove_wpautop($raw_content);
                } else {
                    $buffy .= $raw_content;   //no visual composer
                }

            $buffy .= '</div>';
        $buffy .= '</div>';


        return $buffy;

    }



    function get_map() {

        return  array(
            "name" => 'Text with title',
            "base" => "td_text_with_title",
            "class" => "",
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-title',
            "params" => array(
                array(
                    "param_name" => "custom_title",
                    "type" => "textfield",
                    "value" => '',
                    "heading" => "Block title",
                    "description" => "",
                    "holder" => "div",
                    "class" => ""
                ),
                array(
                    "param_name" => "raw_content",
                    "type" => "textarea_html",
                    "holder" => "div",
                    "class" => "",
                    "heading" => 'Text',
                    "value" => "",
                    "description" => 'Enter your content.'
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
                )
            )
        );
    }
}

td_global_blocks::add_instance(new td_text_with_title());