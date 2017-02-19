<?php
/*
Template Name Posts: TMC Post
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
	.cover-photo {
		width: 100%;
		padding-bottom: 50px;
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
		font-size: 19px;
		line-height: 28px;
		margin-left: auto;
		margin-right: auto;
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
		font-size: 70px;
		color: #555555;
		text-transform: uppercase;
		font-family: "Georgia";
	}
	.title-and-credits-mobile {
		color: #555555;
		font-size: 14px;
	}

	#cover-photo > section.show-for-small.title-and-credits-mobile > h4 {
		color: #555555;
		font-size: 16px;
	}	

	#cover-photo > section.show-for-small.title-and-credits-mobile > h3 {
		color: #555555;
		font-size: 16px;
	}	
	
	.author {
		width: 100%;
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
		color: #666666;
	}

	img .post {
		padding-top: 14px;
		padding-bottom: 14px;
	}		
</style>
</head>

<body <?php body_class($class); ?> data-url="<?php echo home_url(); ?>">
<div id="wrapper">
<div id="cover-photo">
	<img src="http://tuftsdaily.com/wp-content/uploads/2014/10/2014-10-11-Peak_Weekend-20.jpg">

<section class="hide-for-small title-and-credits">
<h1 class="post-title">Such Great Heights</h1>
<h3 class="author">
<strong>By <?php the_author_posts_link(); ?></strong>
</h3>
<h4 class="photographer">
Photography by <strong> Ari Schneider and Alex Cherry </strong>
</h4>
</section>
<section class="show-for-small title-and-credits-mobile">
<h1><?php the_title(); ?></h1>
<h3>
<strong>By <?php the_author_posts_link(); ?></strong>
</h3>
<h4>
Photography by <strong> Ari Schneider and Alex Cherry </strong>
</h4>

</section>
</div>
</br>
</br>
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
