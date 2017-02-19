<?php if (get_post_meta($post->ID, 'is_review', TRUE) == 'yes') { ?>
<aside class="review cf">
	<?php if (get_post_meta($post->ID, 'rating_type', TRUE) == 'star') { ?>
		<?php $features = get_post_meta($post->ID, 'post_ratings', TRUE); $count = count($features); $total = '0'; ?>
		<table class="twelve review_table">
		  <thead>
		  </thead>
		  <tbody>
		  	<?php foreach($features as $feature) { ?>
		    	<?php $total += $feature['feature_rating']; ?>
		    <?php } ?>
		  </tbody>
		  <tfoot>
		      <tr>
		        <td>
		        	<h6><?php _e( 'Summary', THB_THEME_NAME ); ?></h6>
		        	<p><?php echo get_post_meta($post->ID, 'rating_summary', TRUE); ?></p>
		        </td>
		        <td><strong><?php echo round($total / $count, 1); ?></strong><br><?php echo thb_displayStars(round($total / $count, 1)); ?></td>
		      </tr>
		    </tfoot>
		</table>
	<?php } else if (get_post_meta($post->ID, 'rating_type', TRUE) == 'percentage') { ?>
		<?php $features = get_post_meta($post->ID, 'post_ratings_percentage', TRUE); $count = count($features); $total = '0'; ?>
		<table class="twelve review_table">
		  <thead>
		    <tr>
		      <th colspan="2"><?php _e( 'Review Overview', THB_THEME_NAME ); ?></th>
		    </tr>
		  </thead>
		  <tbody>
		  	
		    <tr>
		      <td colspan="2">
		      	<?php foreach($features as $feature) { ?>
			      	<div class="percentage_holder">
			      		<span class="percentage" style="width: <?php echo $feature['feature_percentage']; ?>%;"><?php echo $feature['title']; ?> <b><?php echo $feature['feature_percentage']; ?>%</b></span>
			      	</div>
			      	<?php $total += $feature['feature_percentage']; ?>
		      	<?php } ?>
		      </td>
		    </tr>
		    	
		  </tbody>
		  <tfoot>
		      <tr>
		        <td>
		        	<h6><?php _e( 'Summary', THB_THEME_NAME ); ?></h6>
		        	<p><?php echo get_post_meta($post->ID, 'rating_summary', TRUE); ?></p>
		        </td>
		        <td><strong><?php echo round($total / $count, 1).'%'; ?></strong></td>
		      </tr>
		    </tfoot>
		</table>
	<?php } ?>
</aside>
<?php } ?>
