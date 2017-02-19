<?php get_header(); ?>
<div class="row">
<section class="nine columns main-container">
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  	<article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
  		
		  <?php
		    // The following determines what the post format is and shows the correct file accordingly
		    $format = get_post_format();
		    if ($format) {
		    get_template_part( 'inc/postformats/'.$format );
		    } else {
		    get_template_part( 'inc/postformats/standard' );
		    }
		  ?>
		  <div class="post-title">
		  	<aside><?php echo thb_DisplaySingleCategory(true); ?></aside>
		  	<h1><?php the_title(); ?></h1>
		  </div>
		  <aside class="post-meta">
		  	<ul>
		  		<li><?php _e( 'By', THB_THEME_NAME ); ?> <strong><?php if ( function_exists('coauthors_posts_links') ) {
	coauthors_posts_links();
      }
	else {
	 the_author_posts_link();} ?></strong></li>
		  		<li>&bull;  &nbsp; <?php echo get_the_date('F j, Y'); ?></li>
		  	</ul>
		  </aside>
		  <div class="post-content">
		  	<?php get_template_part( 'inc/postformats/post-meta' ); ?>
		  	<?php the_content(); ?>
		  	<?php if ( is_single()) { wp_link_pages(); } ?>
		  </div>
			  
  	</article>
  <?php endwhile; ?>
  	<?php get_template_part( 'inc/postformats/post-review' ); ?>
  <?php else : ?>
    <p><?php _e( 'Please add posts from your WordPress admin page.', THB_THEME_NAME ); ?></p>
  <?php endif; ?>
  	<section id="comments" class="cf">
  	  <?php comments_template('', true ); ?>
  	</section>	
  	<?php get_template_part( 'inc/postformats/post-prevnext' ); ?>
	<?php get_template_part( 'inc/postformats/post-related' ); ?>
  	<?php get_template_part( 'inc/postformats/post-endbox' ); ?>
</section>
  <?php get_sidebar('single'); ?>
</div>
<?php get_footer(); ?>
