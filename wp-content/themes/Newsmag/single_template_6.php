<?php
// Template 6 - post-final-6.psd - full image background


$td_post_featured_image = td_util::get_featured_image_src($post->ID, 'full');


//if we have a featured image, show it
if (!empty($td_post_featured_image)) {

    //css fix add gradient overlay + shadow
    td_js_buffer::add_to_footer(
        'jQuery().ready(function() {' . "\r\n" .
            'jQuery(\'body\').prepend(\'<div class="td-full-screen-header-image-wrap"><div id="td-full-screen-header-image" class="td-image-gradient"></div></div>\');' . "\r\n" .
            "jQuery('#td-full-screen-header-image').backstretch('" . $td_post_featured_image . "', {fade:1200, centeredY:false});" . "\r\n" .
            'td_post_template_6_title();' . "\r\n" .
        '});'

    );


}




//get the global sidebar position from single.php
global $loop_sidebar_position;

$td_mod_single = new td_module_single($post);

?>
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


    <div class="template6-content">
        <div class=" td-container">
            <div class="td-container-border">
                <div class="td-pb-row">
                    <?php

                    //the default template
                    switch ($loop_sidebar_position) {
                        default:
                            ?>
                                <div class="td-pb-span8 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                                    <div class="td-ss-main-content">
                                        <?php
                                        locate_template('loop-single-6.php', true);
                                        comments_template('', true);
                                        ?>
                                    </div>
                                </div>
                                <div class="td-pb-span4 td-main-sidebar" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                                    <div class="td-ss-main-sidebar">
                                        <?php get_sidebar(); ?>
                                    </div>
                                </div>
                            <?php
                            break;

                        case 'sidebar_left':
                            ?>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                            <div class="td-pb-span8 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                                <div class="td-ss-main-content">
                                    <?php
                                    locate_template('loop-single-6.php', true);
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <?php
                            break;

                        case 'no_sidebar':
                            //td_global::$load_featured_img_from_template = 'art-slide-big';
                            td_global::$load_featured_img_from_template = 'full';
                            ?>
                            <div class="td-pb-span12 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                                <div class="td-ss-main-content">
                                    <?php
                                    locate_template('loop-single-6.php', true);
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <?php
                            break;

                    }
                    ?>
                </div> <!-- /.td-pb-row -->
            </div>
        </div> <!-- /.td-container -->
    </div>
</article> <!-- /.post -->