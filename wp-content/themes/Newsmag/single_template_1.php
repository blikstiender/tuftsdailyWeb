<?php
// Template 1 - post-final-1.psd - featured image float left
//get the global sidebar position from single.php
global $loop_sidebar_position;

$td_mod_single = new td_module_single($post);

?>
<div class="td-container td-post-template-1">
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
                                locate_template('loop-single-1.php', true);
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
                            locate_template('loop-single-1.php', true);
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
                            locate_template('loop-single-1.php', true);
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