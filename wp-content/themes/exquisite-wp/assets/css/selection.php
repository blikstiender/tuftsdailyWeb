<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once('../../inc/ot-functions.php');
	$id = (isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '');
	
	Header("Content-type: text/css");
	error_reporting(0);
	
?>
/* Options set in the admin page */

#header .logo h1 {
	<?php thb_typeecho(ot_get_option('logo_type'), false, 'Merriweather'); ?>
}
<?php if (ot_get_option('breaking_bg_color')) { ?>
#breaking,
#breaking .close {
	background: <?php echo ot_get_option('breaking_bg_color'); ?>;
}
<?php } ?>
<?php if (ot_get_option('breakingtitle_bg_color')) { ?>
#breaking h3{
	background: <?php echo ot_get_option('breakingtitle_bg_color'); ?>;
}
#breaking h3:after {
	border-left-color: <?php echo ot_get_option('breakingtitle_bg_color'); ?>;
}
<?php } ?>

/* Extra CSS */
<?php 
echo ot_get_option('extra_css'); 
echo thb_google_webfont();
?>
