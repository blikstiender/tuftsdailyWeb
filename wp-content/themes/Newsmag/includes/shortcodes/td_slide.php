<?php

class td_slide extends td_block {


    function render($atts){
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)


        extract(shortcode_atts(
            array(
                'autoplay' => ''
            ),$atts));

        $buffy = ''; //output buffer


        if (!empty($class)) {
            $class = ' ' . $class;
        } else {
            $class = '';
        }


        if ($this->td_query->have_posts() and $this->td_query->found_posts > 1 ) {
            //get the js for this block
            $buffy .= $this->get_block_js();


            $buffy .= '<div class="td_block_wrap td_block_slide td_normal_slide' . $class . '">';


                //get the block title
                $buffy .= $this->get_block_title();

                //get the sub category filter for this block
                $buffy .= $this->get_pull_down_filter();

                $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                //inner content of the block

                $buffy .= $this->inner($this->td_query->posts, '' , $autoplay);

                $buffy .= '</div>';

            $buffy .= '</div> <!-- ./block1 -->';
        }
        return $buffy;
    }


    /**
     * @param $posts
     * @param string $td_column_number - get the column number
     * @param string $autoplay - not use via ajax
     * @param bool $is_ajax - if true the script will return the js inline, if not, it will use the td_js_buffer class
     * @return string
     */
    function inner($posts, $td_column_number = '', $autoplay = '', $is_ajax = false) {
        $buffy = '';

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = td_util::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $td_post_count = 0; // the number of posts rendered
        $td_current_column = 1; //the current column

        $td_unique_id_slide = td_global::td_generate_unique_id();

        //@generic class for sliders : td-theme-slider
        $buffy .= '<div id="' . $td_unique_id_slide . '" class="td-theme-slider iosSlider-col-' . $td_column_number . ' td_mod_wrap">';
        $buffy .= '<div class="td-slider ">';


        if (!empty($posts)) {
            foreach ($posts as $post) {
                //$buffy .= td_modules::mod_slide_render($post, $td_column_number, $td_post_count);
                $td_module_slide = new td_module_slide($post);
                $buffy .= $td_module_slide->render($td_column_number, $td_post_count, $td_unique_id_slide);

                //current column
                if ($td_current_column == $td_column_number) {
                    $td_current_column = 1;
                } else {
                    $td_current_column++;
                }


                $td_post_count++;
            }
        }



        $buffy .= $td_block_layout->close_all_tags();

        $buffy .= '</div>'; //close slider

        $buffy .= '<i class = "td-icon-left prevButton"></i>';//'<div class = "prevButton"></div>';
        $buffy .= '<i class = "td-icon-right nextButton"></i>';//'<div class = "nextButton"></div>';

        $buffy .= '</div>'; //close ios

        if (!empty($autoplay)) {
            $autoplay_string =  '
            autoSlide: true,
            autoSlideTimer: ' . $autoplay * 1000 . ',
            ';
        } else {
            $autoplay_string = '';
        }

        //add resize events
        //$add_js_resize = '';
        //if($td_column_number > 1) {
            $add_js_resize = ',
                onSliderLoaded : td_resize_normal_slide,
                onSliderResize : td_resize_normal_slide_and_update';
        //}


        $slide_js = '
jQuery(document).ready(function() {
    jQuery("#' . $td_unique_id_slide . '").iosSlider({
        snapToChildren: true,
        desktopClickDrag: true,
        keyboardControls: false,
        responsiveSlideContainer: true,
        responsiveSlides: true,
        ' . $autoplay_string. '

        infiniteSlider: true,
        navPrevSelector: jQuery("#' . $td_unique_id_slide . ' .prevButton"),
        navNextSelector: jQuery("#' . $td_unique_id_slide . ' .nextButton")
        ' . $add_js_resize . '
    });
});
    ';

        if ($is_ajax) {
            $buffy .= '<script>' . $slide_js . '</script>';
        } else {
            td_js_buffer::add_to_footer($slide_js);
        }

        return $buffy;
    }


    function get_map () {

        $map_block_array = array();
        $temp_array_merge = array();

        $map_block_array = td_global::get_map_block_array();

        //print_r(td_global::get_map_block_array());

        //remove items from get_map_block_array
        unset($map_block_array[4]);   // border_top
        unset($map_block_array[5]);   // color_preset
        unset($map_block_array[9]);   // ajax pagination
        unset($map_block_array[10]);  // infinite load stop

        $temp_array_merge = array_merge(
            array(
                array(
                    "param_name" => "autoplay",
                    "type" => "textfield",
                    "value" => '',
                    "heading" => 'Autoplay slider (at x seconds)',
                    "description" => "Leave empty do disable autoplay",
                    "holder" => "div",
                    "class" => ""
                )
            ),
            td_global::get_map_filter_array(),
            $map_block_array
        );


        return array(
            "name" => 'Slide',
            "base" => "td_slide",
            "class" => "td_slide",
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-slide',
            "params" => $temp_array_merge
        );
    }
}



td_global_blocks::add_instance(new td_slide());