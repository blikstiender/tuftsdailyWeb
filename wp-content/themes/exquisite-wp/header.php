<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>The Tufts Daily</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<?php if(ot_get_option('favicon')){ ?>
	<link rel="shortcut icon" href="<?php echo ot_get_option('favicon'); ?>">
	<?php } ?>
	<?php 
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head(); 
	?>
	<?php 
		if(ot_get_option('boxed') == 'yes') { 
			$class[0] = 'boxed';
	 	} else { $class[1] = ''; }
	?>
	<?php wp_localize_script( 'app', 'themeajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) ); ?>
</head>
<body <?php body_class($class); ?> data-url="<?php echo home_url(); ?>">
<div id="wrapper">
<?php if (ot_get_option('subheader') != 'off') { ?>
<!-- Start Subheader -->
<div id="subheader">
	<div class="row">
		<div class="six columns hide-for-medium-down">
			<?php if(has_nav_menu('top-menu')) { ?>
			  <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'sf-menu'  ) ); ?>
			<?php } else { ?>
				<ul>
					<li><a href="">No menu assigned!</a></li>
				</ul>
			<?php } ?>
		</div>
		<div class="six mobile-one columns show-for-medium-down">
			<i class="fa fa-reorder" id="mobile-toggle"></i>
			
		</div>
		<div class="six mobile-three columns social">
			<?php if (ot_get_option('fb_link')) { ?>
			<a href="<?php echo ot_get_option('fb_link'); ?>" class="boxed-icon facebook icon-1x rounded"><i class="fa fa-facebook"></i></a>
			<?php } ?>
			<?php if (ot_get_option('pinterest_link')) { ?>
			<a href="<?php echo ot_get_option('pinterest_link'); ?>" class="boxed-icon pinterest icon-1x rounded"><i class="fa fa-pinterest"></i></a>
			<?php } ?>
			<?php if (ot_get_option('twitter_link')) { ?>
			<a href="<?php echo ot_get_option('twitter_link'); ?>" class="boxed-icon twitter icon-1x rounded"><i class="fa fa-twitter"></i></a>
			<?php } ?>
			<?php if (ot_get_option('googleplus_link')) { ?>
			<a href="<?php echo ot_get_option('googleplus_link'); ?>" class="boxed-icon google-plus icon-1x rounded"><i class="fa fa-google-plus"></i></a>
			<?php } ?>
			<?php if (ot_get_option('linkedin_link')) { ?>
			<a href="<?php echo ot_get_option('linkedin_link'); ?>" class="boxed-icon linkedin icon-1x rounded"><i class="fa fa-linkedin"></i></a>
			<?php } ?>
			<?php if (ot_get_option('instragram_link')) { ?>
			<a href="<?php echo ot_get_option('instragram_link'); ?>" class="boxed-icon instagram icon-1x rounded"><i class="fa fa-instagram"></i></a>
			<?php } ?>
			<?php if (ot_get_option('xing_link')) { ?>
			<a href="<?php echo ot_get_option('xing_link'); ?>" class="boxed-icon xing icon-1x rounded"><i class="fa fa-xing"></i></a>
			<?php } ?>
			<?php if (ot_get_option('tumblr_link')) { ?>
			<a href="<?php echo ot_get_option('tumblr_link'); ?>" class="boxed-icon tumblr icon-1x rounded"><i class="fa fa-tumblr"></i></a>
			<?php } ?>
			<?php if (ot_get_option('header_ls') != 'off') { do_action( 'thb_language_switcher' ); } ?>
		</div>
	</div>
</div>
<!-- End Subheader -->
<?php } ?>
<!-- Start Mobile Menu -->
<div id="mobile-menu">
	<?php if(has_nav_menu('top-menu')) { ?>
	  <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'depth' => 3, 'container' => false ) ); ?>
	<?php } else { ?>
		<ul class="sf-menu">
			<li><a href="">No menu assigned!</a></li>
		</ul>
	<?php } ?>
</div>
<!-- End Mobile Menu -->
<!-- Start Advertisement -->
<!--/* OpenX JavaScript tag */-->

<!-- /*
 * The tag in this template has been generated for use on a
 * non-SSL page. If this tag is to be placed on an SSL page, change the
 * '//oncampusweb-d.openx.net/...'
 * to
 * 'https://ox-d.oncampusweb.com/...'
 */ -->
<div id="mobile-advertisement", class="show-for-small" style="text-align: center">
<!--/* OpenX JavaScript tag */-->

<!-- /*
 * The tag in this template has been generated for use on a
 * non-SSL page. If this tag is to be placed on an SSL page, change the
 * '//oncampusweb-d.openx.net/...'
 * to
 * 'https://ox-d.oncampusweb.com/...'
 */ -->

<script type="text/javascript">
if (!window.OX_ads) { OX_ads = []; }
OX_ads.push({ "auid" : "537194383" });
</script>
<script type="text/javascript">
document.write('<scr'+'ipt src="//oncampusweb-d.openx.net/mw/1.0/jstag"><\/scr'+'ipt>');
</script>
<noscript><iframe id="53df72a3a2" name="53df72a3a2" src="//oncampusweb-d.openx.net/mw/1.0/afr?auid=537194383&cb==<?php echo mt_rand(1,999999);?>" frameborder="0" scrolling="no" width="320" height="50"><a href="//oncampusweb-d.openx.net/mw/1.0/rc?cs=53df72a3a2&cb==<?php echo mt_rand(1,999999);?>" ><img src="//oncampusweb-d.openx.net/mw/1.0/ai?auid=537194383&cs=53df72a3a2&cb==<?php echo mt_rand(1,999999);?>" border="0" alt=""></a></iframe></noscript>
</div>

<!-- End Advertisement-->
<!-- Start Header -->
<?php if (isset($_GET['header_style'])) { $header_style = htmlspecialchars($_GET['header_style']); } else { $header_style = ''; }  ?>
<?php if(ot_get_option('header_style', 'style2') == 'style2' || $header_style == 'style2' ) {  ?>
<header id="header" class="style2">
	<div class="row">
		<div class="four columns logo">
			<?php if (ot_get_option('logo_text') == 'yes') { ?>
				<h1><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1></li>
			<?php } else { ?>
				<?php if (ot_get_option('logo')) { $logo = ot_get_option('logo'); } else { $logo = get_template_directory_uri(). '/assets/img/logo.png'; } ?>
				
				<a href="<?php echo home_url(); ?>" <?php if(ot_get_option('logo_mobile')) { ?>class="hide-logo"<?php } ?>><img src="<?php echo $logo; ?>" class="logoimg" alt="<?php bloginfo('name'); ?>" /></a>
				<?php if(ot_get_option('logo_mobile')) { ?>
					<a href="<?php echo home_url(); ?>" class="show-logo"><img src="<?php echo ot_get_option('logo_mobile'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<?php } ?>
			<?php } ?>
			<?php echo '<br><time>'. date_i18n( __( 'F d, Y' ), time() ).'</time>'; ?>
		</div>
		<div class="eight columns">
			<?php if(ot_get_option('disableads') != 'yes') { ?>
			<aside class="advertisement">
				<?php 
					if(ot_get_option('ads_header')) {
						echo ot_get_option('ads_header');
					} else {
					?>
						<div class="placeholder"><a href="<?php echo ot_get_option('ads_default', '#'); ?>"><?php _e( 'Advertise', THB_THEME_NAME ); ?></a></div>
					<?php
					}
				 ?>
			</aside>
			<?php }?>
		</div>
	</div>
</header>
<?php } else {  ?>
<header id="header">
	<div class="row">
		<div class="four columns hide-for-small">
			<?php // do_action('thb_weather'); ?>
		</div>
		<div class="four columns logo">
			<?php if (ot_get_option('logo_text') == 'yes') { ?>
				<h1><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1></li>
			<?php } else { ?>
				<?php if (ot_get_option('logo')) { $logo = ot_get_option('logo'); } else { $logo = get_template_directory_uri(). '/assets/img/logo.png'; } ?>
				
				<a href="<?php echo home_url(); ?>" <?php if(ot_get_option('logo_mobile')) { ?>class="hide-logo"<?php } ?>><img src="<?php echo $logo; ?>" class="logoimg" alt="<?php bloginfo('name'); ?>" /></a>
				<?php if(ot_get_option('logo_mobile')) { ?>
					<a href="<?php echo home_url(); ?>" class="show-logo"><img src="<?php echo ot_get_option('logo_mobile'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<?php } ?>
			<?php } ?>
			<?php echo '<br><time>'. date_i18n( __( 'F d, Y' ), time() ).'</time>'; ?>
		</div>
		<div class="four columns hide-for-small">
			<?php get_search_form(); ?>
		</div>
	</div>
</header>
<?php }  ?>
<!-- End Header -->

<div id="advertisement", class="hide-for-small" style="text-align: center">
<script type="text/javascript">
if (!window.OX_ads) { OX_ads = []; }
OX_ads.push({ "auid" : "537193611" });
</script>
<script type="text/javascript">
document.write('<scr'+'ipt src="//oncampusweb-d.openx.net/w/1.0/jstag"><\/scr'+'ipt>');
</script>
<noscript><iframe id="bb0124613b" name="bb0124613b" src="//oncampusweb-d.openx.net/w/1.0/afr?auid=537193611&cb=<?php echo mt_rand(1,999999);?>" frameborder="0" scrolling="no" width="728" height="90"><a href="//oncampusweb-d.openx.net/w/1.0/rc?cs=bb0124613b&cb=<?php echo mt_rand(1,999999);?>" ><img src="//oncampusweb-d.openx.net/w/1.0/ai?auid=537193611&cs=bb0124613b&cb=<?php echo mt_rand(1,999999);?>" border="0" alt=""></a></iframe></noscript>
</div>



<!-- Start Navigation -->
<section id="nav_container">
<div id="nav">
	<div class="row">
		<div class="twelve columns">
			<nav>
				<?php if(ot_get_option('header_menu', 'cat') == 'cat') {  ?>
				<ul class="mega-menu">
					<?php
						wp_list_categories(
					    array(
					    	'title_li'	=> '',
					    	'hide_empty'	=> 1,
						'order_by'	=> 'term_order', 
						'depth'         => 2,
					    	'walker'	=> new CategoryColors_Walker
					    )
						);
					?>
					<li><a href="http://jumbobeat.tuftsdaily.com/" title="View the Blog">Blogs</a>
				<div class="category-holder">
					<ul>
						<li><a href="http://picturetufts.tuftsdaily.com/" title="Picture Tufts">Picture Tufts</a></li>
					</ul>
				</div>
				</li>
				</ul>
				<?php } else if (ot_get_option('header_menu', 'cat') == 'menu') { ?>
					<?php wp_nav_menu( array( 'menu' => ot_get_option('header_menu_location'), 'depth' => 3, 'container' => false, 'menu_class' => 'mega-menu sf-menu'  ) ); ?>
				<?php } ?>
			</nav>
		</div>
	</div>
</div>
</section>
<!-- End Navigation -->
<?php if(ot_get_option('breaking_news_toggle') == 'yes') {  ?>
<?php get_template_part('template-breaking-news'); ?>
<?php } ?>
<?php get_template_part('template-headline'); ?>
<?php get_template_part('template-breadcrumbs'); ?>
<!-- Start Content -->
<div role="main">
