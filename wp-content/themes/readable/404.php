<?php
/**
 * 404 page
 *
 * @package Readable
 */
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="boxed  push-down-45  center">
				<div class="error">
					<span class="primary-color">4</span><span>0</span><span class="primary-color  transform">4</span>
					<h2><?php _e( 'Error. Looks Like Something Went Wrong!', 'readable_wp' ); ?></h2>
					<hr class="error__hr">
					<p>
						<?php _e( 'The page you were looking for is not here.', 'readable_wp' ); ?><br />
						<?php printf( _x( 'Go %sHome%s or use search.', '%s is for the link to home page, wrap the word Home in two %s', 'readable_wp' ), '<a href="' . site_url( '/' ) . '">', '</a>' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>