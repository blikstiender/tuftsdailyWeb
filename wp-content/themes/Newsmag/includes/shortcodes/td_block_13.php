<?php

/**
 * uses module mx3
 * Class td_block_13
 */
class td_block_13 extends td_block {


    function render($atts){
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)


        $buffy = ''; //output buffer

        //get the js for this block
        $buffy .= $this->get_block_js();

        $buffy .= '<div class="' . $this->get_block_classes(array('td-pb-full-cell')) . '">';

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
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

        $buffy = '';

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = td_util::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        if (!empty($posts)) {
            foreach ($posts as $post) {

                switch ($td_column_number) {
                    case '1':
                        $td_module_mx3 = new td_module_mx3($post);
                        $buffy .= $td_module_mx3->render($post);
                        break;

                    case '2':
                        $td_module_14 = new td_module_14($post);
                        $buffy .= $td_module_14->render($post);
                        break;

                    case '3':
                        //we use module 14 - maybe use a full screen one?
                        $td_module_14 = new td_module_14($post);
                        $buffy .= $td_module_14->render($post);
                        break;
                }
            }
        }
        $buffy .= $td_block_layout->close_all_tags();
        return $buffy;
    }


    function get_map () {
        return array(
            "name" => 'Block 13',
            "base" => $this->block_id,
            "class" => $this->block_id,
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-' . $this->block_id,
            "params" => array_merge(
                td_global::get_map_filter_array(),
                td_global::get_map_block_array()
            )
        );
    }

}



td_global_blocks::add_instance(new td_block_13());