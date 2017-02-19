<?php
function td_category_form_ajax($category_id) {
    ob_start();?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_layout',
                'values' => td_panel_generator::helper_display_modules('default+enabled_on_loops')
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
                    'ds' => 'td_category',
                    'item_id' => $category_id,
                    'option_id' => 'tdc_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-default.png'),
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => 'sidebar_right', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_category',
                    'item_id' => $category_id,
                    'option_id' => 'tdc_sidebar_name'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>

    <!-- Show Featured slider -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW CATEGORY BIG GRID</span>
            <p>Enable or disable the category big grid</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_slider',
                'true_value' => '',
                'false_value' => 'yes'
            ));
            ?>
        </div>
    </div>

    <!-- Category color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CATEGORY TAG COLOR ON POST PAGE</span>
            <p>Pick a color for this category tag on post page</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

    <!-- BACKGROUND UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND UPLOAD</span>
            <p>Upload your background image.</br> You can use:</p>
            <ul>
                <li>Single Image</li>
                <li>Pattern</li>
            </ul>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_image'
            ));
            ?>
        </div>
    </div>

    <!-- BACKGROUND STYLE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND STYLE</span>
            <p>How the background will be displayed</p>
            <ul>
                <li><b>Stretch:</b> use this option when you are using a Single Image for you background and you want this image to fill the entire background.</li>
                <li><b>Tiled:</b> use this option when you are using a Pattern for you background.</li>
            </ul>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_bg_repeat',
                'values' => array(
                    array('text' => 'Default', 'val' => ''),
                    array('text' => 'Stretch', 'val' => 'stretch'),
                    array('text' => 'Tiled', 'val' => 'tile')
                )
            ));
            ?>
        </div>
    </div>

    <!-- Background color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Use a solid color instead of an image</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_bg_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

    <!-- Hide category tag on post -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HIDE CATEGORY ON POST AND ON CATEGORY PAGES</span>
            <p>Show or hide category on single post page and on category pages. Useful if you want to have hidden categories to sort things up.</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_category',
                'item_id' => $category_id,
                'option_id' => 'tdc_hide_on_post',
                'true_value' => 'hide',
                'false_value' => ''
            ));
            ?>
        </div>
    </div><?php

    return ob_get_clean();

}//end function