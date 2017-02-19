<?php

class td_module_trending_now {

    private $current_post;
    private $trending_now_unique_id;

    function __construct() {}

    /*
     * render the html
     *
     * @param
     * $array_param[0] : the list of post
     * $array_param[1] : if navigation is manual (val = '') or auto (val = 'auto')
     * */
    function render($array_param) {
        ob_start();

        $posts = '';
        $navigation = '';

        $posts = $array_param[0];
        $navigation = $array_param[1];

        $this->trending_now_unique_id = td_global::td_generate_unique_id();//generate unique id for this object
        ?>

        <div class="td-trending-now-wrapper" id="<?php echo $this->trending_now_unique_id;?>" data-start="<?php echo esc_attr($navigation);?>">
            <div class="td-trending-now-title"><?php echo __td('Trending Now') ?></div><div class="td-trending-now-display-area">

                <?php
                $i_cont = 0;
                foreach ($posts as $post) {

                    //run the td_module constructor for each post
                    $this->current_post = new td_module($post);
                    ?>

                    <div class="td-trending-now-post td-trending-now-post-<?php echo $i_cont;?>" <?php echo $this->current_post->get_item_scope();?>>

                        <?php echo $this->current_post->get_title(25);?>

                        <?php echo $this->current_post->get_item_scope_meta();?>
                    </div>
                    <?php
                    $i_cont++;
                }//end foreach?>

            </div>

            <div class="td-next-prev-wrap">
                <a href="#" class="td_ajax-prev-pagex td-trending-now-nav-left" data-wrapper-id="<?php echo $this->trending_now_unique_id;?>" data-moving="left" data-control-start="<?php echo $navigation;?>"><i class="td-icon-menu-left"></i></a>
                <a href="#" class="td_ajax-next-pagex td-trending-now-nav-right" data-wrapper-id="<?php echo $this->trending_now_unique_id;?>" data-moving="right" data-control-start="<?php echo $navigation;?>"><i class="td-icon-menu-right"></i></a>
            </div>
        </div>

        <?php return ob_get_clean();
    }
}