<!-- Thumbs on Modules/Blocks -->
<?php echo td_panel_generator::box_start('Thumbs on modules &amp; blocks', false); ?>

<div class="td-box-row">
	<div class="td-box-description td-box-full">
		<span class="td-box-title">More information:</span>
		<p>From here you can enable the thumbnail image that will be cropped for the modules &amp; blocks. If the thumbnail image is not enabled for a specific module that you use, the module will show a default placeholder with the size of the image and instructions about how to enable the thumb for that module</p>
        <p><strong style="color:red">Please regenerate your thumbnails if you change any of the thumb settings!</strong> - <a href="http://forum.tagdiv.com/existing-content/" target="_blank">read more</a></p>
	</div>
	<div class="td-box-row-margin-bottom"></div>
</div>


<!-- 640x0 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">640 x 0</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Default post template</li>
			<li>Post style 2</li>
			<li>Module 12, 13, 15</li>
			<li>Smart list style 1, 2</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_640x0',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 0x420 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">0 x 420</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>tagDiv Image Gallery</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_0x420',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 100x75 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">100 x 75</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Module 6, 7</li>
			<li>Block 1, 2, 7, 8</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_100x75',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 80x60 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">80 x 60</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Block 15</li>
			<li>Live search</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_80x60',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 341x220 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">341 x 220</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Block 13, 14, 15</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_341x220',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 300x160 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">300 x 160</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Module 1, 2</li>
			<li>Block 3, 4</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_300x160',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 300x194 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">300 x 194</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Module 3, 4, 5</li>
			<li>Block 1, 2, 5, 6, 16</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_300x194',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 300x350 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">300 x 350</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Post style 1</li>
			<li>Slide - 1 column</li>
			<li>Smart list style 3</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_300x350',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 681x0 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">681 x 0</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Post style 3</li>
			<li>Module 14</li>
			<li>Block 13</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_681x0',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 1021x580 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">1021 x 580</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Post style 4, 5, 8</li>
			<li>Slide - 3 columns(full)</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_1021x580',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 180x135 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">180 x 135</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Module 10</li>
			<li>Block 11</li>
			<li>Mega menu</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_180x135',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 238x178 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">238 x 178</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Module 11</li>
			<li>Block 12</li>
			<li>Big grid - small image</li>
			<li>Related articles</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_238x178',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 537x360 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">537 x 360</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Big grid - large image</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_537x360',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<!-- 640x350 THUMB -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">640 x 350</span>
		<p>This thumb size is used for:</p>
		<ul>
			<li>Slide - 2 columns</li>
		</ul>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_thumb_td_640x350',
			'true_value' => 'yes',
			'false_value' => ''
		));
		?>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>



<?php
/**
 * @todo modulele astea trebuie incarcate by default
 * module8 category label should be enabled by default
 * module_related
 * module_mega_menu
 * module_slide
 */

?>


<!-- Category label on modules -->
<?php echo td_panel_generator::box_start('Category tag on Modules/Blocks', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">More information:</span>
            <p>From here you can show or hide the category tag from modules. For more details about Modules/Blocks <a href="#" >read here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>



    <?php
    foreach (td_global::$modules_list as $td_module_class => $td_module_array) {
        if ($td_module_array['category_label'] === true) {
            ?>
            <!-- <?php echo $td_module_array['text'] ?> -->
            <div class="td-box-row">
                <div class="td-box-description">
                    <span class="td-box-title"><?php echo $td_module_array['text'] . td_panel_generator::helper_generate_used_on_block_list($td_module_array['used_on_blocks']) ?></span>
                    <p>Show or hide the category tag</p>
                </div>
                <div class="td-box-control-full">
                    <?php
                    echo td_panel_generator::checkbox(array(
                        'ds' => 'td_option',
                        'option_id' => 'tds_category_' . td_util::get_module_name_from_class($td_module_class),
                        'true_value' => 'yes',
                        'false_value' => ''
                    ));
                    ?>
                </div>
            </div>
            <?php
        }
    }

    ?>
<?php echo td_panel_generator::box_end();?>





<!-- 7 days post sorting -->
<?php echo td_panel_generator::box_start('7 days post sorting', false); ?>


<!-- text -->
<div class="td-box-row">
	<div class="td-box-description td-box-full">
		<p>When you enable this option a new sorting option will work and it will be selectable on each block (7 days popular). This sorting option will pick posts that are popular in the last 7 days, ordered by page views. This option comes with a small performance penalty and it does not work well with caching plugins yet. When caching is enabled the sorting will be an estimation of the popularity in the last 7 days.</p>
	</div>
	<div class="td-box-row-margin-bottom"></div>
</div>

<!-- use 7 days post sorting -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">USE 7 DAYS POST SORTING</span>
		<p>Enable or disable the popular last 7 days.</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::checkbox(array(
			'ds' => 'td_option',
			'option_id' => 'tds_p_enable_7_days_count',
			'true_value' => 'enabled',
			'false_value' => ''
		));
		?>
	</div>
</div>
<?php echo td_panel_generator::box_end();?>







<hr>
<div class="td-section-separator">Block predefined style</div>

<!-- STYLE 1 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 1 - Red', false);?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#d13030'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#d23434'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#db5858'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#ffcfcf'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#ffe3e3'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#ffe3e3'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#ffe3e3'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#c12424'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#da6767'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#d13030'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_1',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- STYLE 2 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 2 - Black', false);?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#1c1c1c'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#1e1e1e'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#424242'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#c4c4c4'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#c4c4c4'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#e2e2e2'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#c4c4c4'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#4db2ec'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#3a3a3a'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#1e1e1e'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_2',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end(); ?>


<!-- STYLE 3 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 3 - Orange', false);?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#e67e22'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#e67e22'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#f09748'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#ffead7'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#ffead7'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#ffead7'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#ffead7'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#d35400'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#f09748'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_3',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- STYLE 4 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 4 - Yellow', false); ?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#f8c900'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#f8c900'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#f7de73'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#fff8d9'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#fff8d9'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#fff8d9'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#fff8d9'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#ecb200'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#f7de73'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#f8bb00'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#fff8d9'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_4',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- STYLE 5 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 5 - Green', false);?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#0a9e01'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#0a9e01'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#42aa3c'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#deffdc'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#deffdc'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#deffdc'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#deffdc'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#208e01'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#42aa3c'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#0a9e01'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#deffdc'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_5',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- STYLE 6 CSS ------------------------------------------------------------------------->
<?php echo td_panel_generator::box_start('Style 6 - Pink', false);?>

    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Background color</span>
            <p>Choose the background color for the block</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_background_color',
                'default_color' => '#ff0099'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down background color</span>
            <p>Choose the background color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_drop_down_background_color',
                'default_color' => '#ff0099'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down border color</span>
            <p>Choose the border color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_drop_down_border_color',
                'default_color' => '#ff5bbd'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Drop down text color</span>
            <p>Choose the text color for block drop down</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_drop_down_text_color',
                'default_color' => '#ffe8f6'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post title color</span>
            <p>Choose the post title color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_title_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post excerpt color</span>
            <p>Choose the post excerpt color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_excerpt_color',
                'default_color' => '#ffe8f6'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post author color</span>
            <p>Choose the post author color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_author_color',
                'default_color' => '#ffe8f6'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post date color</span>
            <p>Choose the post date color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_date_color',
                'default_color' => '#ffe8f6'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments box color</span>
            <p>Choose the post comments box color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_comments_box_background_color',
                'default_color' => '#dd0085'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post comments color</span>
            <p>Choose the post comments color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_comments_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Post divider color</span>
            <p>Choose the post divider color for the block modules</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_module_post_divider_color',
                'default_color' => '#ff49b6'
            ));
            ?>
        </div>
    </div>


    <?php //added to divide the colors in groups?>
    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title"></span>
            <p></p>
        </div>
        <div class="td-box-control-full">
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation background color</span>
            <p>Choose the background color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_navigation_background_color',
                'default_color' => '#ff0099'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Navigation text color</span>
            <p>Choose the text color for block navigation</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_navigation_text_color',
                'default_color' => '#ffdef2'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row td-block-style">
        <div class="td-box-description">
            <span class="td-box-title">Hover color</span>
            <p>Choose the hover color for this block style</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_block_styles',
                'item_id' => 'style_6',
                'option_id' => 'tds_block_hover_style',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>