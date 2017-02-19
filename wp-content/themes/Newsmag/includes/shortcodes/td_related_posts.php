<?php

/**
 * related posts block, used on single post template to show the related posts by tag author etc.
 * @see td_module_single::related_posts
 *
 * this short code does not have the map function so it dosn't appear in the mega menu @see td_global_blocks::wpb_map_all
 */
class td_related_posts extends td_block {


    function render($atts) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)


        // we have no related posts to display
        if ($this->td_query->post_count == 0) {
            return;
        }


        $buffy = ''; //output buffer

        //get the js for this block
        $buffy .= $this->get_block_js();

        $buffy .= '<div class="' . $this->get_block_classes() . '">';

        //get the filter for this block
        $buffy .= '<h4 class="td-related-title">';
            $buffy .= '<a id="' . td_global::td_generate_unique_id() . '" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="' . $this->block_uid . '" href="#">' . __td('RELATED ARTICLES') . '</a>';
            $buffy .= '<a id="' . td_global::td_generate_unique_id() . '" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="' . $this->block_uid . '" href="#">' . __td('MORE FROM AUTHOR') . '</a>';
        $buffy .= '</h4>';

        $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
        $buffy .= $this->inner($this->td_query->posts);  //inner content of the block
        $buffy .= '</div>';

        //get the ajax pagination for this block
        $buffy .= $this->get_block_pagination();
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

        $buffy = '';


        $buffy .= '<div class="td-related-row">';

        if (!empty($posts)) {
            foreach ($posts as $post) {

                $td_module_related_posts = new td_module_related_posts($post);

                $buffy .= '<div class="td-related-span4">';
                $buffy .= $td_module_related_posts->render();
                $buffy .= '</div>';
            }
        }

        $buffy .= '</div>';

        return $buffy;

    }


}


//this shortcode is not added to td_global_blocks because it's only used on the post page
td_global_blocks::add_instance(new td_related_posts());