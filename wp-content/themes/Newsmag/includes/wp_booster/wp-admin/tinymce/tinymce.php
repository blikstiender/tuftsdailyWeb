<?php




add_action( 'admin_head', 'td_add_tinymce' );
function td_add_tinymce() {
    global $typenow;

    // only on Post Type: post and page
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;

    add_filter( 'mce_external_plugins', 'fb_add_tinymce_plugin' );
    // Add to line 1 form WP TinyMCE
    add_filter( 'mce_buttons', 'td_add_tinymce_button' );
}

// inlcude the js for tinymce
function fb_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['td_shortcode_plugin'] = get_template_directory_uri() . '/includes/wp_booster/wp-admin/tinymce/customcodes.js';
    // Print all plugin js path
    //var_dump( $plugin_array );
    return $plugin_array;
}

// Add the button key for address via JS
function td_add_tinymce_button( $buttons ) {

    array_push( $buttons, 'td_button_key' );
    // Print all buttons
    //var_dump( $buttons );
    return $buttons;
}








// Callback function to filter the MCE settings
function td_mce_before_init_insert_formats( $init_array ) {
    // Define the style_formats array
    $style_formats = array(
        // Each array child is a format with it's own settings

        array(
            'title' => 'text ⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-0',
            'wrapper' => true,
        ),


        array(
            'title' => '⇢ text',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-4',
            'wrapper' => true,
        ),


        array(
            'title' => '⇢ text ⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-1',
            'wrapper' => true,
        ),

        array(
            'title' => '⇢ text ⇠⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-3',
            'wrapper' => true,
        ),

        array(
            'title' => '⇢⇢ text ⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-6',
            'wrapper' => true,
        ),

        array(
            'title' => '⇢⇢ text ⇠⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-2',
            'wrapper' => true,
        ),

	    array(
		    'title' => '⇢⇢⇢ text ⇠⇠⇠',
		    'block' => 'div',
		    'classes' => 'td-paragraph-padding-5',
		    'wrapper' => true,
	    ),

	    array(
		    'title' => 'arrow list',
		    'selector' => 'ul',
		    'classes' => 'td-arrow-list'
	    ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'td_mce_before_init_insert_formats' );


// Callback function to insert 'styleselect' into the $buttons array
function td_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'td_mce_buttons_2');


