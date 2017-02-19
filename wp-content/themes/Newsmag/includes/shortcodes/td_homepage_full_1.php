<?php

class td_homepage_full_1 extends td_block {



    function render($atts) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)
        $buffy = ''; //output buffer
        $buffy .= '<div class="' . $this->get_block_classes() . '">';
            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
            $buffy .= $this->inner($this->td_query->posts);//inner content of the block
            $buffy .= '</div>';
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {
        ob_start();
        if (!empty($posts[0])) {
            $post = $posts[0]; //we get only one post
            $td_post_featured_image = td_util::get_featured_image_src($post->ID, 'full');
            $td_mod_single = new td_module_single($post);
            //make the js template
            ?>
            <script type="text/template" id="<?php echo $this->block_uid . '_tmpl' ?>">

                <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class('td-post-template-6'));?>" <?php echo $td_mod_single->get_item_scope();?>>
                    <div class="template6-header">
                        <div class="td-post-header td-container" id="td_parallax_header_6">
                            <header class="td-pb-padding-side">
                                <?php echo $td_mod_single->get_category(); ?>
                                <?php echo $td_mod_single->get_title();?>
                                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle']; ?></p>
                                <?php } ?>
                                <div class="meta-info">
                                    <?php echo $td_mod_single->get_author();?>
                                    <?php echo $td_mod_single->get_date(false);?>
                                    <?php echo $td_mod_single->get_views();?>
                                    <?php echo $td_mod_single->get_comments();?>
                                </div>
                                <div class="td-read-down"><a href="#"><i class="td-icon-read-down"></i></a></div>
                            </header>
                        </div>
                    </div>
                </article>

            </script>


            <?php


            td_js_buffer::add_to_footer(
                "jQuery('body').addClass('single_template_6');" . "\r\n" .    // add single_template_6 to space the content
                "jQuery('body').prepend(jQuery('#" .  $this->block_uid . "_tmpl').html());" . "\r\n" .
                'jQuery(\'body\').prepend(\'<div class="td-full-screen-header-image-wrap"><div id="td-full-screen-header-image" class="td-image-gradient"></div></div>\');' . "\r\n" .
                'jQuery().ready(function() {' . "\r\n" .
                "jQuery('#td-full-screen-header-image').backstretch('" . $td_post_featured_image . "', {fade:1200, centeredY:false});" . "\r\n" .
                'td_post_template_6_title();' . "\r\n" .

                    "jQuery('.td-read-down a').click(function(event){" . "\r\n" .
                    "event.preventDefault();" . "\r\n" .
                    "td_util.scroll_to_position(jQuery('.td-full-screen-header-image-wrap').height(), 1200);" . "\r\n" .
                    "});" . "\r\n" .
                '});'

            );
        }
        return ob_get_clean();

    }

    function get_map() {
        $temp_array_filter = td_global::get_map_filter_array();

        //remove some options
        unset($temp_array_filter[6]);
        unset($temp_array_filter[7]);

        return array(
            "name" => 'Homepage post',
            "base" => $this->block_id,
            "class" => $this->block_id,
            "controls" => "full",
            "category" => 'Blocks',
            'icon' => 'icon-pagebuilder-' . $this->block_id,
            "params" => $temp_array_filter
        );
    }
}

td_global_blocks::add_instance(new td_homepage_full_1());