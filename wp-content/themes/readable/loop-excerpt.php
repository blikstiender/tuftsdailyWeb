<?php
/**
 * Common loop for the pages
 *
 * @package Readable
 */


if( have_posts() ) :
	while( have_posts() ) :
		the_post();

		// check for the post format and display content or excerpts accordingly
		$has_content =  in_array( get_post_format(), array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );

	?>

		<article <?php post_class( 'boxed  push-down-30' ); ?>>

			<!-- Start of the blogpost -->
			<div class="row">
				<div class="col-xs-10  col-xs-offset-1">

					<!-- Start of the content -->
					<div class="post-content--narrow">
						<h2 class="post-content__title  entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-content__text">
							<?php
								if ( $has_content ) {
									the_content();
								} else {
									the_excerpt();
								}
							?>
						</div>
					</div>
					<!-- End of the content -->

					<?php if ( ! $has_content ): ?>
						<a href="<?php echo get_permalink(); ?>" class="read-more">
							<?php _e( 'Continue reading' , 'readable_wp' ); ?>
							<div class="read-more__arrow">
								<span class="glyphicon  glyphicon-chevron-right"></span>
							</div>
						</a>
					<?php endif ?>
				</div>
			</div>
		</article>

	<?php

	endwhile;
endif;
