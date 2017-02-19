<?php
/**
 * Main blog page
 *
 * @package Readable
 */

get_header();

$sidebar = get_post_meta( get_the_ID() , 'sidebar_position', true );

if( 'as_blog' === $sidebar || empty( $sidebar ) ) {
	$sidebar = get_theme_mod( 'blog_layout', 'right' );
}

?>

<div class="container">
	<div class="row">
		<div class="col-xs-12<?php echo 'left' === $sidebar ? '  col-md-8  col-md-push-4' : ''; echo 'right' === $sidebar ? '  col-md-8' : ''; ?>" role="main">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
				?>

				<!-- Post with featured image -->
				<article <?php post_class( 'boxed  push-down-45' ); ?>>

					<?php get_template_part( 'entry', 'meta' ); ?>

					<!-- Start of the blogpost -->
					<div class="row">
						<div class="col-xs-10  col-xs-offset-1<?php echo 'no' === $sidebar ? '  col-md-8  col-md-offset-2' : ''; ?>">

							<!-- Start of the content -->
							<div class="post-content<?php echo 'no' === $sidebar ? '' : '  post-content--narrow'; ?>">
								<h1 class="entry-title  post-content__title<?php echo 'no' === $sidebar ? '' : '  h2'; ?>">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<div class="entry-content  post-content__text">
									<?php the_content(); ?>
								</div>

								<?php
									$args = array(
										'before'      => '<div class="bold align-center clearfix">' . __( 'Pages:' , 'readable_wp') . ' &nbsp; ',
										'after'       => '</div>',
										'link_before' => '<span class="btn btn-primary">',
										'link_after'  => '</span>',
										'echo'        => 1
									);
									wp_link_pages( $args );
								?>
							</div>
							<!-- End of the content -->

							<div class="row">
								<div class="col-xs-12  col-sm-3">
									<!-- Start of comments button -->
									<div class="post-comments">
										<a class="btn  btn-primary" href="<?php comments_link(); ?>"><?php the_nice_comments_number(); ?></a>
									</div>
									<!-- End of comments button -->
								</div>
								<div class="col-xs-12  col-sm-9">
									<!-- Start of social icons -->
									<div class="social-icons">
										<?php
											if ( function_exists( 'sharing_display' ) ) {
													sharing_display( '', true );
											}

											if ( class_exists( 'Jetpack_Likes' ) ) {
													$custom_likes = new Jetpack_Likes;
													echo $custom_likes->post_likes( '' );
											}
										?>
									</div>
									<!-- End of social icons -->
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12  push-down-60<?php echo has_tag() ? '  col-sm-6' : ''; ?>">
									<!-- Start of post author -->
									<div class="post-author">
										<h6><?php _e( 'Written By', 'readable_wp' ); ?></h6>
										<hr>
										<?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
										<h5>
											<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><span class="vcard author"><span class="fn"><?php the_author(); ?></span></span></a>
										</h5>
										<div class="post-author__text">
											<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
										</div>
									</div>
									<!-- End of post author -->
								</div>

								<?php if ( has_tag() ): ?>
								<div class="col-xs-12  col-sm-6  push-down-60">

									<!-- Start of post tags -->
									<div class="tags">
										<h6><?php _e( 'Tags', 'readable_wp' ); ?></h6>
										<hr>
										<?php the_tags( '','' ); ?>
									</div>

									<!-- End of post tags -->
								</div>
								<?php endif // has_tag(); ?>

							</div>

							<!-- comments start -->
							<?php comments_template(); ?>
							<!-- comments end -->

							<?php if ( function_exists( 'zemanta_related_posts' ) ): ?>
							<!-- Start of related stories -->
							<div class="related-stories">
								<h6><?php _e( 'Related Stories', 'readable_wp' ); ?></h6>
								<hr>
								<?php zemanta_related_posts(); ?>
							</div>
							<!-- End of related stories -->
							<?php endif ?>

						</div>
					</div>
				</article>

			<?php
					endwhile;
				else :
			?>
			<p><?php _e( 'Sorry, no posts matched your criteria.', 'readable_wp' ); ?></p>
			<?php
				endif;
			?>

	</div>

	<?php if ( 'no' !== $sidebar ) : ?>
		<div class="col-xs-12  col-md-4<?php echo 'left' === $sidebar ? '  col-md-pull-8' : ''; ?>">

			<?php dynamic_sidebar( 'author-sidebar' ); ?>

			<div class="sidebar  boxed  push-down-30">
				<div class="row">
					<div class="col-xs-10  col-xs-offset-1">
						<?php dynamic_sidebar( 'blog-sidebar' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	</div>
</div>

<?php get_footer(); ?>