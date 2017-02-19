<?php 
    get_header();
    $cb_blog_style = ot_get_option( 'cb_misc_search_pl',  'excerpt1' );
    
    if ( have_posts() ) { 

?>
    <div class="cb-cover cb-no-image">
        <div class="cb-cat-header">
            <div class="cb-cat-subtitle"><?php _e('Search Results for:', 'cubell'); ?></div>
            <div class="cb-cat-title cb-header-font"><?php echo esc_attr( get_search_query() ); ?></div>
        </div>
    </div>

    <div id="main" class="cb-home clearfix" role="main">
<?php 

        include( locate_template( 'cb-blog-style.php' ) );
    
    } else { 
?>
     <div class="cb-cover cb-no-image">
        <div class="cb-cat-header">
            <div class="cb-cat-subtitle"><?php _e('Sorry, nothing found.', 'cubell'); ?></div>
            <div class="cb-cat-title cb-header-font"><?php echo esc_attr( get_search_query() ); ?></div>
        </div>
    </div>

    <div id="main" class="wrap clearfix" role="main">

        <span class="cb-search-subtitle"><?php _e('Try searching with other keywords', 'cubell'); ?></span>
        <span  class="cb-search-nr-form"><?php echo get_search_form(false); ?></span>
    
<?php } ?>        

    </div> <!-- end #main -->


<?php get_footer(); ?>