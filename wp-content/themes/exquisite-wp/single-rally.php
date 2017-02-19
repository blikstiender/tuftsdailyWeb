<?php
/*
Template Name Posts: Rally Post
*/
?>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
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
<style>
	.post-middle img {
		padding-bottom: 14px;
		padding-top: 14px;
	}
	.cover-photo {
		width: 100%;
		padding-bottom: 40px;
	}
	
	.fade-top {
		height: 400px;
		width: 100%;
		position: absolute;
		background: -webkit-linear-gradient(bottom,	
			rgba(0,0,0,0) 0%,	
			rgba(0,0,0,0) 0%,	
			rgba(0,0,0,0) 0%,	
			rgba(0,0,0,0.9) 95%
		);
	}
	.caption {
		padding-left: 15px;
		font-size: 18px;
		padding-bottom: 30px;
	}

	.row {
		width: 100% !important;
	}

	.columns {
		padding: 0px;
	}

	.post-middle {
		max-width: 700px;
		display: block;
		font-size: 20px;
		line-height: 28px;
		margin-left: auto;
		margin-right: auto;
	}

	.post-middle a {
		color: #2ba6cb;
	}
	.post-middle a:hover {
		color: #2ba6cb;
	}

	#comments {
		max-width: 700px;
		display: block;
		float: none;
		margin-left: auto;
		margin-right: auto;
	}

	.title-and-credits {
		padding-top: 20px;
		position: absolute;
		text-align: center;
		top: 0px;
		width: 100%;
	}		
	.post-title {
		width: 100%;
		font-size: 60px;
		color: white;
		text-transform: uppercase;
		font-family: "Georgia";
	}

	.post-title-mobile {
		color: #444444;
		padding-left: 10px;
	}

	.author {
		width: 100%;
		text-align: center;
		display: block;
		margin-left: auto;
		margin-right: auto;
		font-size: 30px;
		color: #666666;
		text-decoration: none;
	}
	a {
		color: #666666;
	}

	a:hover {
		color: #555555;
	}
	.photographer {
		text-align: center;
		display: block;
		margin-left: auto;
		margin-right: auto;
		color: #666666;
	}
		
</style>
</head>

<body <?php body_class($class); ?> data-url="<?php echo home_url(); ?>">
<div id="wrapper">
<div id="cover-photo">
<div class="fade-top"></div>
<img src="http://tuftsdaily.com/wp-content/uploads/2014/10/2014-10-10-Rally-for-Part-T26ime-Faculty.jpg">
<section class="title-and-credits hide-for-small">
<h1 class="post-title">Students & Faculty Unite</h1>
</section>
<h1 class="show-for-small">
<div class="post-title-mobile">
<h1><?php the_title(); ?></h1>
</div>
<h3 class="author">
<strong>By <?php the_author_posts_link(); ?></strong>
</h3>
<h4 class="photographer">
Photography by <strong><a href="http://tuftsdaily.com/author/nick-pfosi/"> Nicholas Pfosi</a> </strong>
</h4>
</div>
</br>
<div class="row">
<section class="twelve columns">
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  	<article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
		  <div class="post-content">
		  	<?php the_content(); ?>
		  </div>
			  
  	</article>
  <?php endwhile; else : endif; ?>
<section id="comments" class="cf">
  	  <?php comments_template('', true ); ?>
  	</section>


</section>
</div>
</div>
</div>
<?php 
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	 wp_footer(); 
?>
