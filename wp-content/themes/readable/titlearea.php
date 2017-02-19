<?php
/**
 * Main title area above the content
 *
 * @package readable
 */

$subtitle = false;

if( is_home() || is_single() ) {
	$title    = get_theme_mod( 'blog_tagline' );
	if ( strlen( $subtitle ) < 1 ) {
		$subtitle = false;
	}
} else if ( is_page() ) {
	$title = get_the_title();
} else if ( is_category() ) {
	$title    = __( 'Category Archive For', 'readable_wp' );
	$subtitle = '&quot;' . single_cat_title( '', false ) . '&quot;';
} else if ( is_tag() ) {
	$title    = __( 'Tag Archive For', 'readable_wp' );
	$subtitle = '&quot;' . single_tag_title( '', false ) . '&quot;';
} else if ( is_search() ) {
	$title    = __( 'Search Results For', 'readable_wp' );
	$subtitle = '&quot;' . get_search_query() . '&quot;';
} else if ( is_date() ) {
	$title    = __( 'Entries Published On', 'readable_wp' );
	$subtitle = get_the_date( 'F, Y' );
} else if ( is_author() ) {
	$title    = __( 'Entries Written By', 'readable_wp' );
	$subtitle = get_the_author();
} else {
	$title = strip_tags( get_the_title() );
}

?>

<div class="archives-title">
	<h3><?php echo $title; echo $subtitle ? ' <span class="archives-title__subtitle h2">' . $subtitle . '</span>' : ''; ?></h3>
</div>