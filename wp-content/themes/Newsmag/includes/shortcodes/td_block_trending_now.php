<?php
// v3 - for wp_010 from block 3

class td_block_trending_now extends td_block {


    function render($atts) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $buffy = ''; //output buffer

        $trending_style = '';
        // style 2
        if(!empty($atts['style'])) {
            $trending_style = ' td-pb-full-cell td-trending-style2';
        }

        //get the js for this block
        $buffy .= $this->get_block_js();

        $buffy .= '<div class="' . $this->get_block_classes() . $trending_style . '">';

            //get the sub category filter for this block
            $buffy .= $this->get_pull_down_filter();

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                $buffy .= $this->inner($this->td_query->posts, '', $atts);  //inner content of the block
            $buffy .= '</div>';

            //get the ajax pagination for this block
            $buffy .= $this->get_block_pagination();
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '', $atts) {

        $buffy = '';
        $navigation = '';

        if (!empty($atts['navigation'])) {
            $navigation = $atts['navigation'];
        }

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = td_util::vc_get_column_number(); // get the column width of the block from the page builder API
        }
        $td_post_count = 0; // the number of posts rendered
        $td_current_column = 1; //the current columng

        if (!empty($posts)) {
                $td_module_trending_now = new td_module_trending_now();

                switch ($td_column_number) {

                    case '1': //one column layout
	                    $buffy .= $td_block_layout->open_row();
	                    $buffy .= $td_module_trending_now->render(array($posts, $navigation));

	                    if ($td_current_column == 1) {
		                    $buffy .= $td_block_layout->close_row();
	                    }

	                    break;

                    case '2': //two column layout
                        $buffy .= $td_block_layout->open_row();

                        //$buffy .= $td_block_layout->open6();
                        $buffy .= $td_module_trending_now->render(array($posts, $navigation));
                        //$buffy .= $td_block_layout->close6();

                        if ($td_current_column == 2) {
                            $buffy .= $td_block_layout->close_row();
                        }

                        break;

                    case '3': //three column layout
                        $buffy .= $td_block_layout->open_row();

                        //$buffy .= $td_block_layout->open4();
                        $buffy .= $td_module_trending_now->render(array($posts, $navigation));
                        //$buffy .= $td_block_layout->close4();

                        if ($td_current_column == 3) {
                            $buffy .= $td_block_layout->close_row();
                        }

                        break;
                }

                //current column
                if ($td_current_column == $td_column_number) {
                    $td_current_column = 1;
                } else {
                    $td_current_column++;
                }

                $td_post_count++;
        }
        $buffy .= $td_block_layout->close_all_tags();
        return $buffy;
    }


    function get_map () {
        $map_block_array = array();
        $temp_array_merge = array();

        $map_block_array = td_global::get_map_block_array();

        //print_r(td_global::get_map_block_array());

        //remove items from get_map_block_array
        unset($map_block_array[0]);
        unset($map_block_array[1]);
        unset($map_block_array[2]);
        unset($map_block_array[3]);
        unset($map_block_array[4]);
        unset($map_block_array[5]);
        unset($map_block_array[6]);
        unset($map_block_array[7]);
        unset($map_block_array[8]);
        unset($map_block_array[9]);
        unset($map_block_array[10]);


        $temp_array_merge = array_merge(
                td_global::get_map_filter_array(),
                $map_block_array
        );


        //move on the first position the new filter array
        array_unshift(
            $temp_array_merge,
            array(
                "param_name" => "navigation",
                "type" => "dropdown",
                "value" => array('Auto' => '', 'Manual' => 'manual'),
                "heading" => 'Navigation:',
                "description" => "If set on `Auto` will set the `Trending Now` block to auto start rotating posts",
                "holder" => "div",
                "class" => ""
            ),

            array(
                "param_name" => "style",
                "type" => "dropdown",
                "value" => array('Default' => '', 'Style 2' => 'style2'),
                "heading" => 'Style:',
                "description" => "Style of the `Trending Now` box",
                "holder" => "div",
                "class" => ""
            )
        );

        return array(
            "name" => 'News ticker',
            "base" => $this->block_id,
            "class" => $this->block_id,
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-' . $this->block_id,
            "params" => $temp_array_merge
        );
    }

}



td_global_blocks::add_instance(new td_block_trending_now());