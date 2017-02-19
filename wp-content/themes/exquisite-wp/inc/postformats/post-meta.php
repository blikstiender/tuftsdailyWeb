<aside class="single-meta">

	<?php if ( function_exists( 'get_coauthors' ) ) { ?>

		<?php $authors = get_coauthors();
		foreach($authors as $author) { ?>

		<div class="author">
			<?php echo get_avatar($author->ID, 70); ?>
			<strong><a href="<?php echo get_author_posts_url($author->ID); ?>"><?php the_author_meta('display_name', $author->ID); ?></a></strong>
			<p><?php the_author_meta('description', $author->ID); ?></p>
		</div>

		<?php } // End For Loop ?>

	<?php } else { // Co-Authors Not Enabled ?>

	<div class="author">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 70); ?>
		<strong><?php the_author_posts_link(); ?></strong>
		<p><?php the_author_meta('description'); ?></p>
	</div>

	<?php } // End If ?>

	<ul class="meta-list">
		<?php if (ot_get_option('disablelike') == 'no') { ?>
		<li><?php echo thb_printLikes(get_the_ID()); ?> <?php _e( 'Likes', THB_THEME_NAME ); ?></li>
		<?php } ?>
		<li><?php comments_popup_link('<i class="fa fa-comment-o"></i> 0 Comments', '<i class="fa fa-comment-o"></i> 1 Comment', '<i class="fa fa-comment-o"></i> % Comments', 'postcommentcount', '<i class="fa fa-comment-o"></i> Comments Disabled'); ?></li>
		<li><a href="#" onclick="window.print(); return false;"><i class="fa fa-print"></i> <?php _e( 'Print', THB_THEME_NAME ); ?></a></li>
	</ul>
	<?php if(has_tag()) { ?>
		<div class="widget cf widget_tag_cloud">
			<h6 class="force"><?php _e( 'Tags', THB_THEME_NAME ); ?></h6>
			<?php $posttags = get_the_tags();
			if ($posttags) {
				foreach($posttags as $tag) {
					echo '<a href="'. get_tag_link($tag->term_id).'" class="tag-link">' . $tag->name . '</a>';
				}
			} ?>
		</div>
	<?php } ?>
	<?php if(get_post_meta($post->ID, 'minigallery', TRUE) == 'yes') { ?>
		<div class="widget cf widget_minigallery" rel="gallery">
			<h6 class="force"><?php _e( 'Mini Gallery', THB_THEME_NAME ); ?></h6>
		<?php 
				$attachments = get_post_meta($post->ID, 'pp_gallery_slider', TRUE);
				$attachment_array = explode(',', $attachments);
		?>
		<?php foreach ($attachment_array as $attachment) : ?>
		    <?php
		    		$attachmentmeta = get_post($attachment);
		        $src = wp_get_attachment_image_src($attachment, array(110, 80)); 
		        $image_url = wp_get_attachment_image_src($attachment,'full'); $image_url = $image_url[0];
		    ?>
        <a href="<?php echo $image_url; ?>" class="enlarge" title="<?php echo $attachmentmeta->post_excerpt; ?>"><img src="<?php echo $src[0]; ?>" /></a>
		<?php endforeach; ?>
		</div>
	<?php } ?>
</aside>