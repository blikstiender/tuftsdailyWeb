<?php
/**
 * Meta data at the top of the post, with the featured image if set
 *
 * @package Readable
 */

global $sidebar;

?>
<div class="meta">

	<?php if( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="link--no-border"><?php the_post_thumbnail(); ?></a>
	<?php endif; // has_post_thumbnail(); ?>

	<?php if( ! has_post_thumbnail() ) : ?>
		<div class="row">
			<div class="col-xs-12  col-sm-10  col-sm-offset-1<?php echo 'no' === $sidebar ? '  col-md-8  col-md-offset-2' : ''; ?>">
			<?php endif; // ! has_post_thumbnail(); ?>

			<div class="meta__container  clearfix">
				<div class="meta__info">
					<span class="author  meta__author">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>
						<?php
						printf (
							_x( '%1$s in %2$s', 'meta data above the post, %1$s represents the author, %2$s the category/categories which the post has been published to. For example: [John Doe] in [News, Finance]', 'readable_wp' ),
							'<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '"><span class="vcard author"><span class="fn">' . get_the_author() . '</span></span></a>',
							get_the_nice_category( _x( ', ', 'Separator for the list of categories', 'readable_wp' ) )
						); ?>

					</span>
					<time datetime="<?php the_time( 'c' ); ?>" class="meta__date  updated"><a href="<?php echo get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') ); ?>"><span class="glyphicon  glyphicon-calendar"></span> &nbsp; <?php echo get_the_date(); ?></a></time>
				</div>
				<div class="meta__comments">
					<a href="<?php comments_link(); ?>"><span class="glyphicon  glyphicon-comment"></span>  &nbsp; <?php the_nice_comments_number(); ?></a>
				</div>
			</div>

			<?php if( ! has_post_thumbnail() ) : ?>
			</div>
		</div>
	<?php endif; // ! has_post_thumbnail()  ?>

</div>

<?php if ( is_sticky() ) : ?>
	<?php if ( ! has_post_thumbnail() ) : ?>
	<div class="row">
		<div class="col-xs-12  col-sm-10  col-sm-offset-1<?php echo 'no' === $sidebar ? '  col-md-8  col-md-offset-2' : ''; ?>">
	<?php endif; ?>
			<div class="sticky__box">
				<span class="sticky__circle"></span><span class="sticky__circle"></span><span class="sticky__circle"></span><span class="sticky__circle"></span>
			</div>
	<?php if ( ! has_post_thumbnail() ) : ?>
		</div>
	</div>
	<?php endif; ?>
<?php endif; ?>