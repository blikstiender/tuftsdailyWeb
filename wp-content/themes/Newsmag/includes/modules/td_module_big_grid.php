<?php

class td_module_big_grid extends td_module {

    //holds the current post we are working with
    private $current_post;

    function __construct() {}

    function render($posts) {
        ob_start();



        //css fix add gradient overlay + shadow
        td_js_buffer::add_to_footer(
            'jQuery().ready(function() {' . "\r\n" .
            'jQuery(".td-big-grid-post .td-module-thumb a").addClass("td-image-gradient td-big-grid-overlay");' . "\r\n" .
            '});'
        );
        ?>



        <div class="td-big-grid-wrapper">

        <?php
        $i_cont = 0;
        foreach ($posts as $post) {
            //run the td_module constructor for each post
            $this->current_post = new td_module($post);?>

            <div class="td-big-grid-post-<?php echo $i_cont;?> td-big-grid-post" <?php echo $this->current_post->get_item_scope();?>>
                <?php
                //get different image sizes
                if($i_cont == 0) {
                   echo $this->current_post->get_image('td_537x360');
                } else {
                   echo $this->current_post->get_image('td_238x178');
                }?>
                <div class="td-big-grid-meta">
                    <?php if (td_util::get_option('tds_category_module_big_grid') == 'yes') { echo $this->current_post->get_category(); }?>
                    <?php echo $this->current_post->get_title(25);?>

                    <?php
                    if($i_cont == 0) {?>
                        <div class="td-module-meta-info">
                            <?php echo $this->current_post->get_author();?>
                            <?php echo $this->current_post->get_date();?>
                            <?php echo $this->current_post->get_comments();?>
                        </div><?php
                    }?>
                </div>
                <?php echo $this->current_post->get_item_scope_meta();?>
            </div><?php

            $i_cont++;
        }

        //if we have less then 5 (0 - 4) posts
        if($i_cont < 5) {
            for($i=$i_cont; $i<5; $i++){
                ?><div class="td-big-grid-post-<?php echo $i;?> td-big-grid-post" <?php echo $this->current_post->get_item_scope();?>></div><?php
            }
        }

        ?>
        </div>

        <?php return ob_get_clean();
    }
}