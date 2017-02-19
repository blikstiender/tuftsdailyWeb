<?php
/*
Template Name: Home Page - Style 1
*/
?>
<?php get_header(); ?>
    <div class="row">
    <section class="fullwidth twelve columns">
        <div id="featured" class="carousel owl row" data-columns="4" data-navigation="true" data-autoplay="false">
            <?php $args = array(
                'order'     => 'DESC',
                'posts_per_page' => '10',
                'tag__in' => ot_get_option('featured_news'),
            	'meta_key' => '_thumbnail_id',
		);
            ?>
            <?php $query = new WP_Query($args); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <?php $category = thb_GetSingleCategory();
                $color = GetCategoryColor($category); ?>
                <article>
                    <?php the_post_thumbnail('featured', array('class' => 'hidden')); ?>
                    <div class="post front">
                        <a href="<?php the_permalink() ?>" rel="bookmark"><div class="post-gallery">
                            <?php the_post_thumbnail('featured'); ?>
                            <div class="overlay"></div>
                        </div>
                        <div class="post-title">
                            <aside><?php echo thb_DisplaySingleCategory(); ?></aside>
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo ShortenText(get_the_title(), 50); ?></a></h2>
                        </div>
			</a>
                    </div>
                    <div class="post back" style="border-color: <?php echo $color ?>;">
                        <div class="post-title">
                            <aside><?php echo thb_DisplaySingleCategory(); ?></aside>
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo ShortenText(get_the_title(), 50); ?></a></h2>
                            <div class="post-content">
                                <p><?php echo ShortenText(get_the_excerpt(), 50); ?></p>
                                <a class="readmore" href="<?php the_permalink() ?>"><?php _e( 'Read More', THB_THEME_NAME ); ?></a>
                                <?php echo thb_DisplayPostMeta(true,true,true,false); ?>
                            </div>
                        </div>

                    </div>
                </article>
            <?php endwhile; else: endif; ?>
        </div>
    </section>
    <section class="nine columns">
        <section class="categorynews">
            <?php $categories = ot_get_option('home2_middle_categories');?>

            <?php foreach($categories as $category) { ?>
                <?php $color = GetCategoryColor($category); ?>
                <div class="categoryholder cf">
                    <div class="categoryheadline" style="border-color:<?php echo $color; ?>">
                        <h2><?php $cat = get_category($category); echo $cat->name; ?></h2>
                        <span><a href="<?php echo get_category_link($category); ?>" style="color:<?php echo $color; ?>"><?php _e( '<i class="icon-long-arrow-right"></i> View All Articles', THB_THEME_NAME ); ?></a></span>
                    </div>
                    <?php $args = array(
                        'posts_per_page' => '5',
                        'category__in' => $category,
                        'no_found_rows' => true,
                   	'meta_key' => '_thumbnail_id',
			);
                    ?>
                    <?php $query = new WP_Query($args); $i = 0;?>
                    <div class="row">
                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                            <?php if ($i == 0) { ?>
                                <article class="post seven columns">
                                    <div class="post-gallery">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('category-home3'); ?></a>
                                        <?php echo thb_DisplayImageTag(get_the_ID()); ?>
                                    </div>
                                    <div class="post-title">
                                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    </div>
                                    <div class="post-content">
                                        <p><?php echo ShortenText(get_the_excerpt(), 150); ?></p>
                                        <?php echo thb_DisplayPostMeta(true,true,true,false); ?>
                                    </div>
                                </article>
                            <?php } else { ?>
                                <div class="five columns">
                                    <article class="post cf side">
                                        <div class="post-gallery mobile-one left">
                                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
                                        </div>
                                        <div class="post-title mobile-three left">
                                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                            <?php echo thb_DisplayPostMeta(true,true,true,false); ?>
                                        </div>
                                    </article>
                                </div>
                            <?php } ?>

                            <?php $i++; ?>
                        <?php endwhile; else: endif; ?>
                    </div>
                </div> <!-- End Category -->
            <?php } ?>
        </section>
        <section class="categorynews">
                   </section>

        <section class="categorynews">
            <?php $categories = ot_get_option('home2_bottom_categories');?>
            <div class="row">
                <?php foreach($categories as $category) { ?>
                    <div class="four columns">
                        <?php $color = GetCategoryColor($category); ?>
                        <div class="categoryholder cf">

                            <div class="categoryheadline" style="border-color:<?php echo $color; ?>">
                                <h2><?php $cat = get_category($category); echo $cat->name; ?></h2>
                                <span><a href="<?php echo get_category_link($category); ?>" style="color:<?php echo $color; ?>"><?php _e( '<i class="icon-long-arrow-right"></i> View All', THB_THEME_NAME ); ?></a></span>
                            </div>
                            <?php $args = array(
                                'posts_per_page' => '5',
                                'category__in' => $category,
                                'no_found_rows' => true,
				'meta_key' => '_thumbnail_id',
			    );
                            ?>
                            <?php $query = new WP_Query($args); $i = 0;?>
                            <div class="row">
                                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                                    <?php if ($i == 0) { ?>
                                        <article class="post twelve columns">
                                            <div class="post-gallery">
                                                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('widget'); ?></a>
                                                <?php echo thb_DisplayImageTag(get_the_ID()); ?>
                                            </div>
                                            <div class="post-title">
                                                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo ShortenText(get_the_title(), 60); ?></a></h2>
                                            </div>
                                            <div class="post-content">
                                                <p><?php echo ShortenText(get_the_excerpt(), 120); ?></p>
                                                <?php echo thb_DisplayPostMeta(true,true,true,false); ?>
                                            </div>
                                        </article>
                                    <?php } else { ?>
                                        <div class="twelve columns">
                                            <article class="post cf side reverse">
                                                <div class="post-gallery mobile-one left">
                                                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
                                                </div>
                                                <div class="post-title mobile-three left">
                                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo ShortenText(get_the_title(), 50); ?></a></h2>
                                                    <?php echo thb_DisplayPostMeta(true,true,true,false); ?>
                                                </div>
                                            </article>
                                        </div>
                                    <?php } ?>

                                    <?php $i++; ?>
                                <?php endwhile; else: endif; ?>
                            </div>

                        </div> <!-- End Category -->
                    </div>
                <?php } ?>
            </div>
        </section>
    </section>
    <?php get_sidebar('home3'); ?>
    </div>
<?php get_footer(); ?>
