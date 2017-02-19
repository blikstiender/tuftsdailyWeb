<?php $image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'full'); $image_url = $image_url[0]; ?>
<div class="post-gallery nolink">
	<?php if(is_single()) {
					the_post_thumbnail('single'); 
				} else { 
					the_post_thumbnail('blog');  
				}?>
<p><span style="color: black; font-size: 15px"><?php if ( has_post_thumbnail() ) {echo get_post(get_post_thumbnail_id())->post_content;} ?></span>
<span style="color: grey; font-size: 13px">  <?php
  echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
 </span></p>            
</div>
