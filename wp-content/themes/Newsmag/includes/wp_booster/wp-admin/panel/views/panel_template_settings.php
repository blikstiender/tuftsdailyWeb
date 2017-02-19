<!-- Theme information -->
<?php echo td_panel_generator::box_start('More information'); ?>

<!-- text -->
<div class="td-box-row">
    <div class="td-box-description td-box-full">
        <p>In this section you can configure the <a href="http://codex.wordpress.org/Template_Hierarchy" target="_blank">default wordpress templates</a>. Most of the templates support the following configurations:</p>
        <ul>
            <li>How to display posts in the default wordpress loops</li>
            <li>Sidebar position</li>
            <li>What sidebar to show</li>
        </ul>
    </div>

    <div class="td-box-row-margin-bottom"></div>
</div>

<?php echo td_panel_generator::box_end();?>


<!-- smart sidebar support -->
<?php echo td_panel_generator::box_start('Smart sidebar'); ?>
<div class="td-box-row">
    <div class="td-box-description td-box-full">
        <p>From here you can enable and disable the smart sidebar on all the templates. The smart sidebar is an affix (sticky) sidebar that has auto resize and it scrolls with the content. The smart sidebar reverts back to a normal sidebar on iOS (iPad) and on mobile devices. The following widgets are not supported in the smart sidebar:</p>
        <ul>
            <li>[tagDiv] Block 14</li>
            <li>[tagDiv] Block 15</li>
            <li>[tagDiv] Slide</li>
        </ul>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">Smart sidebar</span>
            <p>Enable / Disable the smart sidebar on all templates</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_smart_sidebar',
                'true_value' => 'enabled',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>

    <div class="td-box-row-margin-bottom"></div>
</div>




<?php echo td_panel_generator::box_end();?>


<!-- 404 template -->
    <?php echo td_panel_generator::box_start('404 template', false); ?>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_404_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Archive page -->
    <?php echo td_panel_generator::box_start('Archive display view', false); ?>

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
                'option_id' => 'tds_archive_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_archive_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_archive_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Attachment template -->
    <?php echo td_panel_generator::box_start('Attachment template', false); ?>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_attachment_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_attachment_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- AUTHOR page -->
    <?php echo td_panel_generator::box_start('Author display view', false); ?>

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
                'option_id' => 'tds_author_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>


    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_author_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_author_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- BBPRESS template -->
    <?php /* echo td_panel_generator::box_start('bbPress template', false); ?>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_bbpress_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_bbpress_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end(); */?>




<!-- Blog and posts template -->
    <?php echo td_panel_generator::box_start('Blog and posts template', false); ?>

    <!-- ARTICLE DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_home_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>


    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_home_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_home_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- CATEGORY page -->
    <?php echo td_panel_generator::box_start('Category display view', false); ?>

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
                'option_id' => 'tds_category_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>


    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_category_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_category_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Page template -->
<?php echo td_panel_generator::box_start('Page template', false); ?>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_page_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_page_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Search page -->
    <?php echo td_panel_generator::box_start('Search display view', false); ?>

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
                'option_id' => 'tds_search_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>


    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_search_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_search_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- TAG page -->
<?php echo td_panel_generator::box_start('Tag display view', false); ?>

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
                'option_id' => 'tds_tag_page_layout',
                'values' => td_panel_generator::helper_display_modules('enabled_on_loops')
            ));
            ?>
        </div>
    </div>


    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
            <p>Sidebar position and custom sidebars</p>
        </div>
        <div class="td-box-control-full td-panel-sidebar-pos">
            <div class="td-display-inline-block">
                <?php
                echo td_panel_generator::visual_select_o(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_tag_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_tag_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- Woocommerce template -->
<?php echo td_panel_generator::box_start('Woocommerce template', false); ?>

<!-- Custom Sidebar + position -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
		<p>Sidebar position and custom sidebars</p>
	</div>
	<div class="td-box-control-full td-panel-sidebar-pos">
		<div class="td-display-inline-block">
			<?php
			echo td_panel_generator::visual_select_o(array(
				'ds' => 'td_option',
				'option_id' => 'tds_woo_sidebar_pos',
				'values' => array(
					array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
					array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
					array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
				)
			));
			?>
			<div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
		</div>
		<div class="td-display-inline-block td_sidebars_pulldown_align">
			<?php
			echo td_panel_generator::sidebar_pulldown(array(
				'ds' => 'td_option',
				'option_id' => 'tds_woo_sidebar'
			));
			?>
			<div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
		</div>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>