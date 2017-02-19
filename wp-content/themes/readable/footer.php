<?php
/**
 * The template for displaying the footer
 *
 * @package Readable
 */
?>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-sidebar-top' ); ?>
				</div>
			</div>
		</footer>
		<footer class="copyrights">
			<div class="container">
				<div class="row">
					<div class="col-xs-12  col-sm-6">
						<?php echo get_theme_mod( 'footer_left', 'Readable WP theme &copy; Copyright 2014' ); ?>
					</div>
					<div class="col-xs-12  col-sm-6">
						<div class="copyrights--right">
							<?php echo get_theme_mod( 'footer_right', 'Made by <a href="http://www.proteusthemes.com">ProteusThemes</a>' ); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div><!-- /.page-content-container -->

<?php echo ot_get_option( 'footer_scripts', '' ); ?>

<?php wp_footer(); ?>
<!-- W3TC-include-js-body-end -->
</body>
</html>