<?php
/**
 * The Header for Readable Theme
 *
 * @package Readable
 */

$navbar_position = get_theme_mod( 'navbar_position', 'static' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<!-- W3TC-include-js-head -->
	<?php wp_head(); ?>
	<!-- W3TC-include-css -->
</head>

<body <?php body_class( 'static' === $navbar_position ? '' : 'has-sticky-header' ); ?>>
<!-- W3TC-include-js-body-start -->

	<!-- Search - Open panel -->
	<div class="search-panel">
		<a href="<?php echo home_url( '/' ); ?>" class="search-panel__close  js--toggle-search-mode" title="<?php _e( 'Exit the search mode' ); ?>"><i class="glyphicon glyphicon-remove"></i></a>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form action="<?php echo site_url( '/' ); ?>">
						<input type="text" class="search-panel__form  js--search-panel-text" name="s" placeholder="<?php _e( 'Begin typing for search', 'readable_wp' ); ?>">
						<p class="search-panel__text"><?php _e( 'Press enter to see results or esc to cancel.', 'readable_wp' ); ?></p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="page-content-container"><!-- ends in the footer.php -->
		<!-- header -->
		<header class="header <?php echo ( 'static' === $navbar_position ) ? '' : ' header--sticky '; ?> push-down-45">
			<div class="container">
				<div class="logo  pull-left">
					<a href="<?php echo home_url(); ?>">
						<?php
							$logo = esc_url( get_theme_mod( 'logo_img', false ) );
							if ( ! empty( $logo ) ) :
						?>
							<img src="<?php echo $logo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
						<?php
							else :
						?>
							<h1 class="blog-name"><?php bloginfo( 'name' ); ?></h1>
						<?php
							endif;
						?>
					</a>
				</div>

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#readable-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="navbar  navbar-default" role="navigation">

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse  navbar-collapse" id="readable-navbar-collapse">
						<?php
							if ( has_nav_menu( 'main-menu' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container'      => false,
									'menu_class'     => 'navigation'
								) );
							}
						?>
						<a href="#" class="search__container--mobile  js--toggle-search-mode  visible-xs  visible-sm"> <span class="glyphicon  glyphicon-search"></span></a>
					</div><!-- /.navbar-collapse -->
				</nav>
				<div class="hidden-xs  hidden-sm">
					<a href="#" class="search__container  js--toggle-search-mode"> <span class="glyphicon  glyphicon-search"></span></a>
					<?php
						$icons = get_social_icons_navbar_links( get_theme_mod( 'zocial' ) );
						if ( ! empty( $icons ) ) :
					?>
					<div class="social">
						<a href="#" class="social__container  js--blank-link"><span class="glyphicon  glyphicon-heart"></span></a>
						<ul class="social__dropdown">
							<?php

								$blank = get_theme_mod( 'icons_new_window', 'no' ) === 'no' ? '' : 'target="_blank"';
								foreach ( $icons as $network => $url ) :
							?>
							<li>
								<a href="<?php echo $url; ?>" <?php echo $blank; ?> class="social__container"> <span class="zocial-<?php echo $network; ?>"></span></a>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</header>