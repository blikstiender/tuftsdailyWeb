<!-- HEADER STYLE -->
<?php echo td_panel_generator::box_start('Header Style'); ?>




    <!-- HEADER STYLE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HEADER STYLE</span>
            <p>Select the order in which the header elements will be arranged</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_header_style',
                'values' => array(
                    array('text' => '<strong>Style 1 - </strong> default', 'val' => ''),
                    array('text' => '<strong>Style 2 - </strong> logo on colored box', 'val' => '2'),
                    array('text' => '<strong>Style 3 - </strong> full top menu', 'val' => '3'),
                    array('text' => '<strong>Style 4 - </strong> logo in menu', 'val' => '4'),
                    array('text' => '<strong>Style 5 - </strong> logo in full menu on top', 'val' => '5'),
                    array('text' => '<strong>Style 6 - </strong> top menus + logo and ad', 'val' => '6'),
                    array('text' => '<strong>Style 7 - </strong> full header logo', 'val' => '7'),
                    array('text' => '<strong>Style 8 - </strong> full header logo + full menu', 'val' => '8'),
                    array('text' => '<strong>Style 9 - </strong> full menus + logo in menu', 'val' => '9'),
                    array('text' => '<strong>Style 10 - </strong> full menu + text logo', 'val' => '10')
                )
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>


<!-- TOP MENU -->
<?php echo td_panel_generator::box_start('Top Menu', false); ?>

    <!-- TOP MENU -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP MENU</span>
            <p>Hide or show the top menu. To hide the social icons: Header ⇢ Social networks</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

    <!-- Top header menu -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP MENU</span>
            <p>Select a menu for the top section</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'wp_theme_menu_spot',
                'option_id' => 'top-menu',
                'values' => td_panel_generator::$td_user_created_menus
            ));
            ?>
        </div>
    </div>


    <!-- SHOW DATE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW DATE</span>
            <p>Hide or show the date on the top menu</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_data_top_menu',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- DATE FORMAT -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DATE FORMAT</span>
            <p>Default value: l, F j, Y. <a href="http://php.net/manual/en/function.date.php">Read more</a> about the date format (it's the same with the php date function)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_data_time_format'
            ));
            ?>
        </div>
    </div>


    <!-- SHOW Sign In / Join (Login Widget)  -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW SIGN IN / JOIN WIDGET</span>
            <p>Show or hide the Sign In / Register links (default is hidden)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_login_sign_in_widget',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- MAIN MENU -->
<?php echo td_panel_generator::box_start('Main Menu', false); ?>

    <!-- MAIN MENU -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">Header menu (main)</span>
            <p>Select a menu for the main header section</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'wp_theme_menu_spot',
                'option_id' => 'header-menu',
                'values' => td_panel_generator::$td_user_created_menus
            ));
            ?>
        </div>
    </div>


    <!-- STICKY MENU -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">STICKY MENU</span>
            <p>How to display the header menu on scroll</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_snap_menu',
                'values' => array (
                    array('text' => '<strong>Normal menu</strong> - (not sticky)', 'val' => ''),
                    array('text' => '<strong>Always snap</strong> - stays at the top of the page', 'val' => 'snap'),
                    array('text' => '<strong>Smart snap </strong> - (mobile)', 'val' => 'smart_snap_mobile'),
                    array('text' => '<strong>Smart snap </strong> - (always)', 'val' => 'smart_snap_always'),
                )
            ));
            ?>
        </div>
    </div>

	<!-- SHOW THE MOBILE LOGO ON THE STICKY MENU -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">LOGO ON STICKY MENU</span>
			<p>Show / Hide the Logo on sticky menu</p>
			<p><strong>Notice: </strong>Upload a logo in <strong>Logo for Mobile</strong> section if you want a different logo instead of the default one</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::checkbox(array(
				'ds' => 'td_option',
				'option_id' => 'tds_logo_on_sticky',
				'true_value' => 'show',
				'false_value' => ''
			));
			?>
		</div>
	</div>

<?php echo td_panel_generator::box_end();?>


<!-- LOGO -->
<?php echo td_panel_generator::box_start('Logo &amp; Favicon', false); ?>

    <!-- LOGO UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO UPLOAD</span>
            <p>Upload your logo (272 x 90px) .png or .jpg</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_upload'
            ));
            ?>
        </div>
    </div>

    <!-- RETINA LOGO UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">RETINA LOGO UPLOAD</span>
            <p>Upload your retina logo (544 x 180px) .png or .jpg. </p>
            <ul>
                <li>If you do not set any retina logo, the site will load the normal logo on retina displays</li>
                <li>The retina logo has to have the same file format with the normal logo</li>
            </ul>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_upload_r'
            ));
            ?>
        </div>
    </div>


    <!-- FAVICON -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FAVICON</span>
            <p>Optional - upload a favicon image <br>(16 x 16px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_favicon_upload'
            ));
            ?>
        </div>
    </div>


    <!-- Logo ALT attribute -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO ALT ATTRIBUTE</span>
            <p><a href="http://www.w3schools.com/tags/att_img_alt.asp" target="_blank">Alt attribute</a> for the logo. This is the alternative text if the logo cannot be displayed. It's useful for SEO and generally is the name of the site.</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_alt'
            ));
            ?>
        </div>
    </div>


    <!-- Logo TITLE attribute -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO TITLE ATTRIBUTE</span>
            <p><a href="http://www.w3schools.com/tags/att_global_title.asp" target="_blank">Title attribute</a> for the logo. This attribute specifies extra information about the logo. Most browsers will show a tooltip with this text on logo hover.</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_title'
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row" style="margin-top: 85px;">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Text logo for header style 10 :</span>
            <p>The text logo is used only by Style 10 - full menu + text logo. The other header styles use only images for logos</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

	<!-- Text LOGO -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">TEXT LOGO</span>
			<p>Write a text logo</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::input(array(
				'ds' => 'td_option',
				'option_id' => 'tds_logo_text',
				'placeholder' => 'NEWSMAG'
			));
			?>
		</div>
	</div>


	<!-- Text LOGO Tagline -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">TEXT LOGO TAGLINE</span>
			<p>Write a tagline for the text logo</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::input(array(
				'ds' => 'td_option',
				'option_id' => 'tds_tagline_text',
				'placeholder' => 'DISCOVER THE ART OF PUBLISHING'
			));
			?>
		</div>
	</div>
<?php echo td_panel_generator::box_end();?>



<!-- LOGO for MOBILE-->
<?php echo td_panel_generator::box_start('Logo for Mobile', false); ?>


    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>You can optionally load a different logo on mobile phones and small screens. Usually the logo is smaller so that it can fit in the smart affix menu. iPhone, iPad, Samsung S3 S4 S5 and a lot of phones use the retina logo.</p>
            <p>If you don't upload any Logo Mobile by default will be used the Logo that you uploaded in the section above. This Option is recommended when your logo will not scale perfect on mobile devices.</p>
	        <p><strong>Notice: </strong>Don't upload a logo for Mobile if you use <strong>Header Style: </strong>Style 4, Style 5 and Style 9</strong>, It's not necessary.</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>



	<!-- LOGO MOBILE -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">LOGO MOBILE</span>
			<p>Upload your logo</p>
            <p><strong>Note: </strong>For best results logo mobile size: 230 x 90px</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::upload_image(array(
				'ds' => 'td_option',
				'option_id' => 'tds_logo_menu_upload'
			));
			?>
		</div>
	</div>

	<!-- RETINA LOGO MOBILE IN MENU UPLOAD -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">RETINA LOGO MOBILE</span>
			<p>Upload your retina logo (double size)</p>
            <p><strong>Note: </strong>For best results retina logo mobile size: 460 x 180px</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::upload_image(array(
				'ds' => 'td_option',
				'option_id' => 'tds_logo_menu_upload_r'
			));
			?>
		</div>
	</div>

<?php echo td_panel_generator::box_end();?>


<!-- Social Networks -->
<?php echo td_panel_generator::box_start('Social Networks', false); ?>


    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>The social networks appear in the top menu section and in the footer (left) of the site if you have that enabled in Theme panel ⇢ Footer ⇢ Footer predefined content.</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ENABLE / DISABLE</span>
            <p>Enable / Disable social networks in top menu</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'td_social_networks_show',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <?php
    foreach(td_social_icons::$td_social_icons_array as $panel_social_id => $panel_social_name) {
        ?>
        <div class="td-box-row">
            <div class="td-box-description">
                <span class="td-box-title"><?php echo strtoupper($panel_social_name);?></span>
                <p>Link to : <?php echo $panel_social_name;?></p>
            </div>
            <div class="td-box-control-full">
                <?php
                echo td_panel_generator::input(array(
                    'ds' => 'td_social_networks',
                    'option_id' => $panel_social_id
                ));
                ?>
            </div>
        </div><?php
    }
    ?>

<?php echo td_panel_generator::box_end();?>



<!-- iOS Bookmarklet -->
<?php echo td_panel_generator::box_start('iOS Bookmarklet', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>The bookmarklets work on iOS and Android. When a user adds your site to the home screen, the phone will download one of the icons from here (based on the screen size and device type) and your site will appear with that icon on the homes creen</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>



    <!-- iOS bookmarklet 76x76 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 76 x 76</span>
            <p>Upload your icon (76 x 76px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad mini non retina + ipad 2
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_76'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 114x114 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 114 x 114</span>
            <p>Upload your icon (114 x 114px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php  // iphone retina ios6
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_114'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 120x120 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 120 x 120</span>
            <p>Upload your icon (120 x 120px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // iphone retina ioS7
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_120'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 144x144 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 144 x 144</span>
            <p>Upload your icon (144 x 144px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad retina ios6
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_144'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 152x152 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 152 x 152</span>
            <p>Upload your icon (152 x 152px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad retina ios7
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_152'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>

