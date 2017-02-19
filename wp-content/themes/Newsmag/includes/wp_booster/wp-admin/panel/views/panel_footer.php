<!-- FOOTER SETTINGS -->
<?php echo td_panel_generator::box_start('Footer settings', true); ?>

<div class="td-box-row">
    <div class="td-box-description td-box-full">
        <span class="td-box-title">More information:</span>
        <p>The footer uses sidebars to show information. Here you can customize the number of sidebars and the layout. To add content to the footer head go to the widgets section and drag widget to the Footer 1, Footer 2 and Footer 3 sidebars </p>
    </div>
    <div class="td-box-row-margin-bottom"></div>
</div>


<!-- Enable footer -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">SHOW FOOTER</span>
        <p>Show or hide the footer</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::checkbox(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer',
            'true_value' => '',
            'false_value' => 'no'
        ));
        ?>
    </div>
</div>



<!-- LAYOUT -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">LAYOUT</span>
        <p>Set footer layout</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::visual_select_o(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_widget_cols',
            'values' => array(
                array('text' => '1/3 - 1/3 - 1/3', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/footer-1.png'),
                array('text' => '2/3 - 1/3', 'title' => '', 'val' => '23-13', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/footer-2.png'),
                array('text' => '1/3 - 2/3', 'title' => '', 'val' => '13-23', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/footer-3.png'),
                array('text' => '3/3 (full)', 'title' => '', 'val' => '33', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/footer-4.png')
            )
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>




<!-- FOOTER PREDEFINED CONTENT -->
<?php echo td_panel_generator::box_start('Footer predefined content'); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Column 1 predefined content:</span>
            <p>The predefined content loads before the "Footer 1 sidebar" content so you can mix and match the predefined content with the sidebar content. The column 1 predefined content includes:</p>
            <ul>
                <li>The footer logo - different one from the header logo. If not footer logo is specified, the site will load the default normal logo.</li>
                <li>Footer text - usually it's a text about your sites topic</li>
                <li>Your contact email address</li>
                <li>The social icons (that are also available in the header of the site). To customize what social icons appear in the footer, go to Header ⇢ Social Networks</li>
            </ul>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>


    <!-- Disable column 1 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW COLUMN 1 PREDEFINED CONTENT</span>
            <p>Show or hide the predefined content for column 1</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_column_1',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>

    <!-- logo -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER LOGO</span>
            <p>Upload your logo</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_logo_upload'
            ));
            ?>
        </div>
    </div>

    <!-- logo retina -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER RETINA LOGO</span>
            <p>Upload your retina logo(double size)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_retina_logo_upload'
            ));
            ?>
        </div>
    </div>

    <!-- footer text -->
    <div class="td-box-row td-custom-css">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER TEXT</span>
            <p>Write here your footer text</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::textarea(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_text',
            ));
            ?>
        </div>
    </div>


    <!-- Footer contact email -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">YOUR EMAIL ADDRESS</span>
            <p>Your email address</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_email'
            ));
            ?>
        </div>
    </div>


    <!-- Enable social icons -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW SOCIAL ICONS</span>
            <p>Show or hide the social icons, to setup the Social icons go to <strong>Header</strong> -> <strong>Social Networks</strong></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_social',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>



    <!-- column 2 -->
    <div class="td-box-row" style="margin-top: 150px;">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Column 2 predefined content:</span>
            <p>The predefiend content for this column includes a Block 7</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- Disable column 2 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW COLUMN 2 PREDEFINED CONTENT</span>
            <p>Show or hide the predefined content for column 2</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_column_2',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>



    <!-- column 3 -->
    <div class="td-box-row" style="margin-top: 150px;">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Column 3 predefined content:</span>
            <p>The predefiend content for this column includes a Popular categories block</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- Disable column 3 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW COLUMN 3 PREDEFINED CONTENT</span>
            <p>Show or hide the predefined content for column 3</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_column_3',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>





<!-- SUB-FOOTER SETTINGS -->
<?php echo td_panel_generator::box_start('Sub footer settings', false); ?>


    <!-- text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">More information:</span>
            <p>The sub footer section is the content under the main footer. It usually includes a copyright text and a menu spot on the right</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- Enable sub-footer -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW SUB-FOOTER</span>
            <p>Show or hide the sub-footer</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_sub_footer',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>

    <!-- Footer copyright text -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER COPYRIGHT TEXT</span>
            <p>Set footer copyright text</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_copyright'
            ));
            ?>
        </div>
    </div>


    <!-- Copyright symbol -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">COPYRIGHT SYMBOL</span>
            <p>Show or hide the footer copyright symbol</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_copy_symbol',
                'true_value' => '',
                'false_value' => 'no'
            ));
            ?>
        </div>
    </div>

    <!-- Footer menu -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER MENU</span>
            <p>Select a menu for the sub footer</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'wp_theme_menu_spot',
                'option_id' => 'footer-menu',
                'values' => td_panel_generator::$td_user_created_menus
            ));
            ?>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>