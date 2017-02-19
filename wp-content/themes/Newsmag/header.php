<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php td_util::author_meta(); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


    <?php


    //facebook sharing fix for videos, we add the custom meta data
    if (is_single()) {
        global $post;
        if (has_post_thumbnail($post->ID)) {
            $td_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            if (!empty($td_image[0])) {
                echo '<meta property="og:image" content="' .  $td_image[0] . '" />';
            }
        }
    }


    $tds_favicon_upload = td_util::get_option('tds_favicon_upload');
    if (!empty($tds_favicon_upload)) {
        echo '<link rel="icon" type="image/png" href="' . $tds_favicon_upload . '">';
    }

    $tds_ios_76 = td_util::get_option('tds_ios_icon_76');
    $tds_ios_120 = td_util::get_option('tds_ios_icon_120');
    $tds_ios_152 = td_util::get_option('tds_ios_icon_152');
    $tds_ios_114 = td_util::get_option('tds_ios_icon_114');
    $tds_ios_144 = td_util::get_option('tds_ios_icon_144');

    if(!empty($tds_ios_76)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="76x76" href="' . $tds_ios_76 . '"/>';
    }

    if(!empty($tds_ios_120)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="120x120" href="' . $tds_ios_120 . '"/>';
    }

    if(!empty($tds_ios_152)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="152x152" href="' . $tds_ios_152 . '"/>';
    }


    if(!empty($tds_ios_114)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="' . $tds_ios_114 . '"/>';
    }


    if(!empty($tds_ios_144)) {
        echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="' . $tds_ios_144 . '"/>';
    }


    wp_head();
    ?>




</head>





<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

<?php //this is closing in the footer.php file ?>
<div id="td-outer-wrap">

    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>

    <div class="td-transition-content-and-menu td-mobile-nav-wrap">
        <?php locate_template('parts/menu-mobile.php', true);?>
    </div>

    <?php //this is closing in the footer.php file ?>
    <div class="td-transition-content-and-menu td-content-wrap"><!--theme content div-->
        <!-- <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div> -->


<?php
$tds_header_style = td_util::get_option('tds_header_style');
switch ($tds_header_style) {

    default:
        // this is the default header configuration
        locate_template('parts/header/header-style-1.php', true);
        break;

    case '2':
        // Style 2 - logo on colored box
        locate_template('parts/header/header-style-2.php', true);
        break;

    case '3':
        // Style 3 - top menu full + styled menu
        locate_template('parts/header/header-style-3.php', true);
        break;

    case '4':
        // Style 4 - logo in menu
        locate_template('parts/header/header-style-4.php', true);
        break;

    case '5':
        // Style 5 - logo in menu on top
        locate_template('parts/header/header-style-5.php', true);
        break;

    case '6':
        // Style 6 - top menus + logo and ad
        locate_template('parts/header/header-style-6.php', true);
        break;

    case '7':
        // Style 7 - full header logo
        locate_template('parts/header/header-style-7.php', true);
        break;

    case '8':
        // Style 8 - full header logo + menu
        locate_template('parts/header/header-style-8.php', true);
        break;

    case '9':
        // Style 9 - full menus + logo in menu
        locate_template('parts/header/header-style-9.php', true);
        break;

	case '10':
		// Style 10 - full menu + text logo
		locate_template('parts/header/header-style-10.php', true);
		break;
}

do_action('td_wp_booster_after_header'); //used by unique articles