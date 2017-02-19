<?php
/**
 * Category page BIG GRID
 *
 * the way it works
 *
 * - if the current current category have posts then display those posts
 * - if the current category does't have posts then check the subcategories of this (current category)
 *          - if the subcategories have posts then those posts will be displayed
 *          - if the subcategories does't have posts then an empty area will be displayed
 *
 * - if the current category does't have post or subcategories then, the area where the subcategories links will be displayed + the area of the big grid will be removed
 *
 **/

//category list
// $global_flag_to_hide_no_post_to_display - is a flag to hide the 'No posts to display' message if on category page there are between 1 and 5  posts
global  $cur_cat_obj, $loop_sidebar_position, $loop_module_id, $cur_cat_id, $paged, $global_flag_to_hide_no_post_to_display, $wp_query ;


$buffy = '';


//get the option to show or not the big grid
$td_disable_big_grid = td_util::get_category_option($cur_cat_id, 'tdc_slider');






//get the link of this category
$category_link = get_category_link($cur_cat_id);

//if we are on a cat without subcats
$td_cat_without_subcats = 0;


//the subcategories
if (!empty($cur_cat_obj->cat_ID)) {
    $td_sub_cats = get_categories(array(
        'parent' => $cur_cat_obj->cat_ID,
        'hide_empty' => 0
    ));

    //if the current category dose't have subcategories then get all the categories from the same level as current category
    if (empty($td_sub_cats)) {

        $td_cat_without_subcats = 1;

        if($cur_cat_obj->category_count == 0) {
            $td_disable_big_grid = 'yes';
        }

        //exclude uncategorized category
        $Obj_cat_uncategorized = get_category_by_slug('uncategorized');
        $id_cat_uncategorized = $Obj_cat_uncategorized->term_id;

        //exclude featured category
        $Obj_cat_featured = get_category_by_slug('featured');
        $id_cat_featured = $Obj_cat_featured->term_id;

        $td_sub_cats = get_categories(array(
            'parent' => $cur_cat_obj->parent,
            'exclude' => array($id_cat_uncategorized, $id_cat_featured),
            'hide_empty' => 0
        ));
    }
}




if (!empty($td_sub_cats)) {
    $buffy = '<div class="td-category-header">';

        $buffy .= '<ul class="td-category td-category-page-subcats">';

        foreach ($td_sub_cats as $td_sub_cat) {
            if (!empty($td_sub_cat->name) and td_util::get_category_option($td_sub_cat->cat_ID,'tdc_hide_on_post') != 'hide') {
                $tax_meta_subcat_color = td_util::get_category_option($td_sub_cat->cat_ID, 'tdc_color');

                $td_cat_color = '';
                /* if (!empty($tax_meta_subcat_color)) {
                    $td_cat_color = ' style="background-color:' . $tax_meta_subcat_color . ';"';
                } else { */
                    if($td_cat_without_subcats == 1 and $td_sub_cat->cat_ID == $cur_cat_id) {
                        $td_cat_color = ' style="background-color:#222222;color:#ffffff;"';
                    }
                /*} */
                $buffy .= '<li class="entry-category"><a ' . $td_cat_color . ' href="' . get_category_link($td_sub_cat->cat_ID) . '">' . $td_sub_cat->name . '</a></li>';

            }
        }
        $buffy .= '</ul>';
        $buffy .= '<div class="clearfix"></div>';

    $buffy .= '</div>';
}




//get the `filter_by` URL ($_GET) variable
$filter_by = get_query_var('filter_by');


$td_category_big_grid_drop_down_filter_options = array(
                                                    array('id' => 'latest', 'value' => $category_link, 'caption' => __td('Latest')),
                                                    array('id' => 'featured' , 'value' => add_query_arg('filter_by', 'featured', $category_link), 'caption' => __td('Featured posts')),
                                                    array('id' => 'popular', 'value' => add_query_arg('filter_by', 'popular', $category_link), 'caption' => __td('Most popular')),
                                                    array('id' => 'popular7' , 'value' => add_query_arg('filter_by', 'popular7', $category_link), 'caption' => __td('7 days popular')),
                                                    array('id' => 'review_high' , 'value' => add_query_arg('filter_by', 'review_high', $category_link), 'caption' => __td('By review score')),
                                                    array('id' => 'random_posts' , 'value' => add_query_arg('filter_by', 'random_posts', $category_link), 'caption' => __td('Random'))
                                                );






// is a flag to hide the 'No posts to display' message if on category page there are between 1 and 5  posts
$global_flag_to_hide_no_post_to_display = '';
//this flag is checked in the loop.php file to hide the `No posts to display` message if we have the big grid on the page and there are between 1 and 5  posts
$global_flag_to_hide_no_post_to_display = $wp_query->post_count;


//if there are post to display add also the drop down category filter
if($td_disable_big_grid != 'yes') {
    echo $buffy;

    //create the drop-down filter on category pages
    echo td_util::generate_category_pull_down($td_category_big_grid_drop_down_filter_options, $filter_by);




    //print_r($global_flag_to_hide_no_post_to_display);

    //only show the big grid on first page
    if($paged < 2) {
        //parameters to filter to for big grid
        $atts_for_big_grid = array(
                               'limit' => '5',
                               'category_id' => $cur_cat_id
                             );

        //add the sorting option to the big_grid
        if(!empty($filter_by)) {
            $atts_for_big_grid['sort'] = $filter_by;
        }



        //show the big grid
        echo td_global_blocks::get_instance('td_block_big_grid')->render($atts_for_big_grid);
    }
}