<?php

/**
 *
 * Class td_block_big_grid
 */
class td_block_big_grid extends td_block {

    function render($atts){
        $atts['limit'] = 5;

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)



        if (is_category()) {
            // we have no related posts to display
            if ($this->td_query->post_count == 0) {
                return '<div class="td_line_above_cat_big_grid"> </div>';
            }

            /** if we have posts in the big grid and we are on a category, do not show the default page no posts message. @see td_global::$custom_no_posts_message */
            td_global::$custom_no_posts_message = false;
        }




        $buffy = ''; //output buffer

        //get the js for this block
        $buffy .= $this->get_block_js();

        $buffy .= '<div class="' . $this->get_block_classes() . '">';

            //get the block title
            $buffy .= $this->get_block_title();

            //get the sub category filter for this block
            $buffy .= $this->get_pull_down_filter();

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                $buffy .= $this->inner($this->td_query->posts); //inner content of the block
            $buffy .= '</div>';

            //get the ajax pagination for this block
            $buffy .= $this->get_block_pagination();
        $buffy .= '</div> <!-- ./block -->';
        $buffy .= '<div class="clearfix"></div>';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

        $buffy = '';

        if (empty($td_column_number)) {
            $td_column_number = td_util::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        //if we are on 3 columns
        //if ($td_column_number == 3) {//@todo nu merge functia td_util::vc_get_column_number()
            $td_block_layout = new td_block_layout();

            //if we have posts
            if (!empty($posts)) {
                $td_module_big_grid = new td_module_big_grid();
                $buffy .= $td_module_big_grid->render($posts);
            }

            $buffy .= $td_block_layout->close_all_tags();
        //}
        return $buffy;
    }


    function get_map () {

        $map_filter_array = td_global::get_map_filter_array();
        unset($map_filter_array[6]);

        return array(
            "name" => 'Big Grid',
            "base" => $this->block_id,
            "class" => $this->block_id,
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-' . $this->block_id,
            "params" => $map_filter_array
        );
    }
}



td_global_blocks::add_instance(new td_block_big_grid());