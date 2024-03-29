<?php

td_global::$current_template = 'woocommerce';


get_header();

//set the template id, used to get the template specific settings
$template_id = 'woo';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)


//read the custom single post settings - this setting overids all of them
$td_page = get_post_meta($post->ID, 'td_page', true);
if (!empty($td_page['td_sidebar_position'])) {
    $loop_sidebar_position = $td_page['td_sidebar_position'];
}?>

<div class="td-container">
    <div class="td-container-border">
        <div class="td-pb-row">
		<?php
		switch ($loop_sidebar_position) {
		    case 'sidebar_left':
		        ?>
		        <div class="td-pb-span4 td-main-sidebar" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
			        <div class="td-ss-main-sidebar">
		                <?php get_sidebar(); ?>
			        </div>
		        </div>
		        <div class="td-pb-span8 td-main-content td-pb-padding-side" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
			        <div class="td-ss-main-content">
			            <?php
			                woocommerce_breadcrumb();
			                woocommerce_content();
			            ?>
					</div>
		        </div>
		        <?php
		        break;

		    case 'no_sidebar':
		        ?>
		        <div class="td-pb-span12 td-main-content td-pb-padding-side" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
			        <div class="td-ss-main-content">
			            <?php
			                woocommerce_breadcrumb();
			                woocommerce_content();
			            ?>
			        </div>

		        </div>
		        <?php
		        break;



		    default:
		        ?>
		            <div class="td-pb-span8 td-main-content td-pb-padding-side" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
			            <div class="td-ss-main-content">
				            <?php
			                    woocommerce_breadcrumb();
			                    woocommerce_content();
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
		}?>
        </div>
    </div>
</div>
<?php
get_footer();
?>