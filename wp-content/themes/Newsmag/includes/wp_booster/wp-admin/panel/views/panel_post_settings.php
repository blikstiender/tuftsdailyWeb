



<!-- post settings -->
<?php echo td_panel_generator::box_start('Post settings'); ?>

	<!-- Show categories -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">SHOW CATEGORIES TAGS</span>
			<p>Enable or disable the categories tags <br>(on single post page)</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::checkbox(array(
				'ds' => 'td_option',
				'option_id' => 'tds_p_categories_tags',
				'true_value' => '',
				'false_value' => 'hide'
			));
			?>
		</div>
	</div>

    <!-- Show author name -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW AUTHOR NAME</span>
            <p>Enable or disable the author name <br>(on blocks, modules &amp; single post page)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_author_name',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

    <!-- Show date -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW DATE</span>
            <p>Enable or disable the post date <br>(on blocks, modules &amp; single post page)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_date',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show post views -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW POST VIEWS</span>
            <p>Enable or disable the post views <br>(on blocks, modules &amp; single post page)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_views',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- SHow comment count -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW COMMENT COUNT</span>
            <p>Enable or disable comment number <br>(on blocks, modules &amp; single post page)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_comments',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>




    <!-- Show tags on post -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW TAGS ON POST</span>
            <p>Enable or disable the post tags <br>(bottom of single post pages)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_tags',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show author box -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW AUTHOR BOX</span>
            <p>Enable or disable the author box <br>(bottom of single post pages)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_author_box',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show next and previous posts -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW NEXT AND PREVIOUS POSTS</span>
            <p>Show or hide `next` and `previous` posts <br>(bottom of single post pages)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_next_prev',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Disable comments on post pages -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE COMMENTS ON POST PAGES</span>
            <p>Enable or disable the comments for post pages, on the entire site. This option is disabled by default</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_disable_comments_sidewide',
                'true_value' => 'disable',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>



    <!-- Disable comments on pages -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE COMMENTS ON PAGES</span>
            <p>Enable or disable the comments on pages, on the entire site. This option is disabled by default</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_disable_comments_pages',
                'true_value' => '',
                'false_value' => 'show_comments'
            ));
            ?>
        </div>
    </div>




<?php echo td_panel_generator::box_end();?>



<!-- Default site post template -->
<?php echo td_panel_generator::box_start('Default site post template', false);?>

<!-- Default post template -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">DEFAULT SITE POST TEMPLATE</span>
        <p>Setting this option will make all post pages, that don't have a post template set, to be displayed using this template. You can overwrite this setting on a per post basis.</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::visual_select_o(array(
            'ds' => 'td_option',
            'option_id' => 'td_default_site_post_template',
            'values' => td_panel_generator::helper_td_global_list_to_panel_values(td_global::$post_templates_list)
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>




<!-- breadcrumbs -->
<?php echo td_panel_generator::box_start('Breadcrumbs', false); ?>

    <!-- Show breadcrumbs on post -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS</span>
            <p>Enable or disable the breadcrumbs</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show breadcrumbs home link -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS HOME LINK</span>
            <p>Show or hide the home link in breadcrumbs</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_home',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>



    <!-- Show breadcrumbs parent category -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW PARENT CATEGORY</span>
            <p>Show or hide the parent category link ex: Home > parent category > category </p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_parent',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- show Breadcrumbs article title -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW ARTICLE TITLE</span>
            <p>Show or hide the article title on post pages</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_article',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- featured images -->
<?php echo td_panel_generator::box_start('Featured images', false); ?>

    <!-- SHOW FEATURED IMAGE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW FEATURED IMAGE</span>
            <p>Show or hide featured image</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_featured_image',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Featured image placeholder -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FEATURED IMAGE PLACEHOLDER</span>
            <p>When a post doesn't have a featured image set, the theme will load a placeholder image.</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_hide_featured_image_placeholder',
                'true_value' => '',
                'false_value' => 'hide_placeholder'
            ));
            ?>
        </div>
    </div>


    <!-- Featured image lightbox -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FEATURED IMAGE LIGHTBOX</span>
            <p>What to do when the featured image is clicked inside a post. (on single post page)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_featured_image_view_setting',
                'values' => array(
                    array('text' => 'Use lightbox', 'val' => ''),
                    array('text' => 'No lightbox', 'val' => 'no_modal')
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- related article -->
<?php echo td_panel_generator::box_start('Related article', false); ?>

    <!-- text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>On each single post at the bottom, the theme shows three or five similar posts in the related articles section.</p>
            <ul>
                <li>Three articles are shown on the layout with sidebar</li>
                <li>Five articles are shown on the full width layout</li>
            </ul>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- Show similar article -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW RELATED ARTICLE</span>
            <p>Enable or disable the related article section</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_similar_articles',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Related article - Type -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">RELATED ARTICLE - TYPE</span>
            <p>How to pick the related articles:</p>
            <ul>
                <li>by category - pick posts from that have at least one category in common with the current post</li>
                <li>by tags - pick posts that have at least one tag in common with the current post</li>
            </ul>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_similar_articles_type',
                'values' => array(
                    array('text' => 'by category', 'val' => ''),
                    array('text' => 'by tag', 'val' => 'by_tag')
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- sharing -->
<?php echo td_panel_generator::box_start('Sharing', false); ?>


    <!-- text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>All the articles of <?php echo TD_THEME_NAME?> have sharing buttons at the start of the article (usually under the title) and at the end of the article (after tags). Each article sharing section is
            made from the sharing buttons + the facebook like + tweeter tweet button.</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- ARTICLE sharing top -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP ARTICLE SHARING</span>
            <p>Show or hide the top article sharing on single post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_social_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

    <!-- ARTICLE top like -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP ARTICLE LIKE/TWEET</span>
            <p>Show or hide the top article like/tweet on single post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_like_tweet_show',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- ARTICLE sharing bottom -->
    <div class="td-box-row" style="margin-top: 125px">
        <div class="td-box-description">
            <span class="td-box-title">BOTTOM ARTICLE SHARING</span>
            <p>Show or hide the bottom article sharing on post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_bottom_social_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- ARTICLE bottom like -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BOTTOM ARTICLE LIKE/TWEET</span>
            <p>Show or hide the bottom article like/tweet on post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_bottom_like_tweet_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Twitter name -->
    <div class="td-box-row" style="margin-top: 125px">
        <div class="td-box-description">
            <span class="td-box-title">TWITTER USERNAME</span>
            <p>This will be used in the tweet for the via parameter. The site name will be used if no twitter username is provided. <br> Do not include the @</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_tweeter_username'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<?php echo td_panel_generator::box_start('More Article Box', false); ?>

    <!-- text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>This is a box that appears when a user scrolls on a single post at least 400px. The box appears in the right bottom corner and it can show one or more posts related with the current one.</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MORE ARTICLES</span>
            <p>Enable / Disable - More Articles option</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_enable',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISTANCE FROM THE TOP</span>
            <p>This is the distance from the top, that user have to scroll, before the window will appear, default 400</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_distance_from_top'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISPLAY ARTICLES</span>
            <p>What articles should be displayed</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_display',
                'values' => array(
                    array('text' => 'Latest Article' , 'val' => ''),
                    array('text' => 'From Same Category' , 'val' => 'same_category'),
                    array('text' => 'From Post Tags' , 'val' => 'same_tag'),
                    array('text' => 'From Same Author' , 'val' => 'same_author'),
                    array('text' => 'Random' , 'val' => 'random')
                )
            ));
            ?>
        </div>
    </div>


    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_display_module',
                'values' => td_panel_generator::helper_display_modules('enabled_on_more_articles_box')
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">NUMBER OF POSTS</span>
            <p>Number of post to display</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_number',
                'values' => array(
                    array('text' => '1' , 'val' => ''),
                    array('text' => '2' , 'val' => 2),
                    array('text' => '3' , 'val' => 3),
                    array('text' => '4' , 'val' => 4),
                    array('text' => '5' , 'val' => 5),
                    array('text' => '6' , 'val' => 6)
                )
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE TIME</span>
            <p>If the user closes the More Articles box, this is the time (in days) to wait before seeing the box again</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_time_to_wait',
                'values' => array(
                    array('text' => 'never' , 'val' => ''),
                    array('text' => 'for 1 day' , 'val' => 1),
                    array('text' => 'for 2 days' , 'val' => 2),
                    array('text' => 'for 3 days' , 'val' => 3)
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- Advanced options -->
<?php echo td_panel_generator::box_start('Ajax count', false); ?>


    <!-- text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>Enabling this feature will update the post view count using ajax on both pages and single post page. This feature is best used if you have a caching plugin active. On pages it will retrieve from the server the correct post view count. On single post page this feature will also increment the post view counter. When this feature is enabled, the default (classic) post counter incrementation is disabled. After enabling or disabling this feature please be sure to empty all caches.  </p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>





    <!-- Enable / Disabled Ajax post count -->
    <div class="td-box-row">
        <div class="td-box-description td-no-short-description">
            <span class="td-box-title">ENABLE / DISABLE AJAX POST VIEW COUNT</span>
            <p>Usefull if you are using a caching plugin</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ajax_post_view_count',
                'true_value' => 'enabled',
                'false_value' => ''
            ));
            ?>
        </div>

    </div>

<?php echo td_panel_generator::box_end();?>