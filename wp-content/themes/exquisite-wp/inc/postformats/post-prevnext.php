<!-- Start Previous / Next Post -->
<?php 
	$prev_post = get_adjacent_post(false, '', true);
	
	if(!empty($prev_post)) {
		$excerpt = $prev_post->post_content;
		$previd = $prev_post->ID;
		$thumb = get_the_post_thumbnail($previd, 'slider');
		
		echo '<div class="post post-navi hide-on-print prev"><div class="post-gallery">'.$thumb.'<div class="overlay"></div></div><div class="post-title"><h2><a href="' . get_permalink($previd) . '" title="' . $prev_post->post_title . '">' . ShortenText($prev_post->post_title, 50). '</a></h2></div></div>'; 
	}
?>
<?php
	$next_post = get_adjacent_post(false, '', false);
	
	if(!empty($next_post)) {
		$excerptnext = $next_post->post_content;
		$nextid = $next_post->ID;
		$thumb = get_the_post_thumbnail($nextid, 'slider');
		
		echo '<div class="post post-navi hide-on-print next"><div class="post-gallery">'.$thumb.'<div class="overlay"></div></div><div class="post-title"><h2><a href="' . get_permalink($nextid) . '" title="' . $next_post->post_title . '">' . ShortenText($next_post->post_title, 50). '</a></h2></div></div>'; 
	}
?>
<?php wp_reset_query(); ?>
<!-- End Previous / Next Post -->
