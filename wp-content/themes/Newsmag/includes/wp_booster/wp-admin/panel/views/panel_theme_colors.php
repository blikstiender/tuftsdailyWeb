<!-- THEME COLORS -->
<?php echo td_panel_generator::box_start('Theme colors - GENERAL'); ?>

    <!-- theme_color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">THEME COLOR</span>
            <p>Select theme accent color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_theme_color',
                'default_color' => '#4db2ec'
            ));
            ?>
        </div>
    </div>


    <!-- BACKGROUND COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Select theme background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_site_background_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

	<!-- GRIG COLOR -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">GRID LINE COLOR</span>
			<p>Select grid line color</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::color_picker(array(
				'ds' => 'td_option',
				'option_id' => 'tds_grid_line_color',
				'default_color' => 'e6e6e6'
			));
			?>
		</div>
	</div>

<?php echo td_panel_generator::box_end();?>

<hr>
<div class="td-section-separator">Header</div>

<!-- TOP MENU -->
<?php echo td_panel_generator::box_start('Top menu', false); ?>

    <!-- BACKGROUND COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Select top menu background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>


    <!-- TOP MENU TEXT COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">TOP MENU TEXT COLOR</span>
            <p>Select top menu text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu_text_color',
                'default_color' => '#222222'
            ));
            ?>
        </div>
    </div>


    <!-- TOP MENU TEXT HOVER COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">TOP MENU TEXT HOVER COLOR</span>
            <p>Select top menu text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu_text_hover_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

	<!-- TOP SUB-MENU TEXT COLOR -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title td-title-on-row">TOP SUB-MENU TEXT COLOR</span>
			<p>Select top sub-menu text color</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::color_picker(array(
				'ds' => 'td_option',
				'option_id' => 'tds_top_sub_menu_text_color',
				'default_color' => '#222222'
			));
			?>
		</div>
	</div>

	<!-- TOP SUB-MENU TEXT HOVER COLOR -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title td-title-on-row">TOP SUB-MENU HOVER COLOR</span>
			<p>Select top sub-menu text hover color</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::color_picker(array(
				'ds' => 'td_option',
				'option_id' => 'tds_top_sub_menu_text_hover_color',
				'default_color' => ''
			));
			?>
		</div>
	</div>


    <!-- SOCIAL ICONS COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SOCIAL ICONS COLOR</span>
            <p>Select social icons color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_social_icons_color',
                'default_color' => '#222222'
            ));
            ?>
        </div>
    </div>

    <!-- SOCIAL ICONS HOVER COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">SOCIAL ICONS HOVER COLOR</span>
            <p>Select social icons hover color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_social_icons_hover_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>

<!-- MAIN MENU -->
<?php echo td_panel_generator::box_start('Main menu', false); ?>

    <!-- Menu background color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MENU BACKGROUND COLOR</span>
            <p>Select menu background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_menu_color',
                'default_color' => '#222222'
            ));
            ?>
        </div>
    </div>

    <!-- Menu text color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MENU TEXT COLOR</span>
            <p>Select menu text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_menu_text_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>

	<!-- Top border color -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title">MENU BORDER COLOR</span>
			<p>Select menu top border color</p>
		</div>
		<div class="td-box-control-full">
			<?php
			echo td_panel_generator::color_picker(array(
				'ds' => 'td_option',
				'option_id' => 'tds_menu_border_color',
				'default_color' => ''
			));
			?>
		</div>
	</div>

<?php echo td_panel_generator::box_end();?>

<!-- HEADER COLOR -->
<?php echo td_panel_generator::box_start('Header', false); ?>

    <!-- Header color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HEADER BACKGROUND COLOR</span>
            <p>Select header background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_header_wrap_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<hr>
<div class="td-section-separator">Footer</div>


<!-- FOOTER -->
<?php echo td_panel_generator::box_start('Footer', false); ?>

    <!-- FOOTER color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Select footer background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_color',
                'default_color' => '#222222'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- SUB FOOTER -->
<?php echo td_panel_generator::box_start('Sub-footer', false); ?>

    <!-- FOOTER bottom color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Select sub footer bottom background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_bottom_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>


    <!-- FOOTER bottom text color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TEXT COLOR</span>
            <p>Select sub footer bottom text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_picker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_bottom_text_color',
                'default_color' => '#222222'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<hr>
<div class="td-section-separator">Content</div>


<!-- POSTS PAGE -->
<?php echo td_panel_generator::box_start('Posts', false); ?>

<!-- Article title -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">POST TITLE COLOR</span>
		<p>Select post title color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_post_title_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Author name -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">POST AUTHOR NAME COLOR</span>
		<p>Select author name color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_post_author_name_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Post content color -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">POST TEXT COLOR</span>
		<p>Select post content color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_post_content_color',
			'default_color' => '#444444'
		));
		?>
	</div>
</div>

<!-- Post h color -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">POST H1, H2, H3, H4, H5, H6 COLOR</span>
		<p>Select in post h color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_post_h_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Post blockquote color -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">POST BLOCKQUOTE COLOR</span>
		<p>Select in post blockquote color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_post_blockquote_color',
			'default_color' => ''
		));
		?>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>


<!-- PAGES COLORS -->
<?php echo td_panel_generator::box_start('Pages', false); ?>

<!-- Page title -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">PAGE TITLE COLOR</span>
		<p>Select page title color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_page_title_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Page content -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">PAGE TEXT COLOR</span>
		<p>Select page text color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_page_content_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Page content h -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">PAGE H1, H2, H3, H4, H5, H6 COLOR</span>
		<p>Select page h color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_page_h_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>



<hr>
<div class="td-section-separator">Modules and Blocks</div>


<!-- ARTICLE TITLES -->
<?php echo td_panel_generator::box_start('Article titles', false); ?>

<!-- Trending now -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">NEWS TICKER</span>
		<p>Select post title color for News Ticker</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_news_ticker_title_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<!-- Module 1 -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MODULE 1</span>
        <p>Select post title color for module 1</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_module1_title_color',
            'default_color' => '#111111'
        ));
        ?>
    </div>
</div>

<!-- Module 2 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 2</span>
		<p>Select post title color for module 2</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module2_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 3 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 3</span>
		<p>Select post title color for module 3</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module3_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 4 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 4</span>
		<p>Select post title color for module 4</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module4_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 5 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 5</span>
		<p>Select post title color for module 5</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module5_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 6 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 6</span>
		<p>Select post title color for module 6</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module6_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 7 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 7</span>
		<p>Select post title color for module 7</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module7_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 8 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 8</span>
		<p>Select post title color for module 8</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module8_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 9 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 9</span>
		<p>Select post title color for module 9</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module9_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 10 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 10</span>
		<p>Select post title color for module 10</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module10_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 11 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 11</span>
		<p>Select post title color for module 11</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module11_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 12 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 12</span>
		<p>Select post title color for module 12</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module12_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 13 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 13</span>
		<p>Select post title color for module 13</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module13_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 14 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 14</span>
		<p>Select post title color for module 14</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module14_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module 15 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE 15</span>
		<p>Select post title color for module 15</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module15_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module mx2 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE MX2</span>
		<p>Select post title color for module MX2</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module_mx2_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<!-- Module mx4 -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">MODULE MX4</span>
		<p>Select post title color for module MX4</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_module_mx4_title_color',
			'default_color' => '#111111'
		));
		?>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>


<!-- AUTHOR NAME -->
<?php echo td_panel_generator::box_start('Author name', false); ?>

<!-- Author name -->
<div class="td-box-row">
	<div class="td-box-description">
		<span class="td-box-title">AUTHOR NAME COLOR</span>
		<p>Select Author name link color</p>
	</div>
	<div class="td-box-control-full">
		<?php
		echo td_panel_generator::color_picker(array(
			'ds' => 'td_option',
			'option_id' => 'tds_author_name_title_color',
			'default_color' => '#222222'
		));
		?>
	</div>
</div>

<?php echo td_panel_generator::box_end();?>