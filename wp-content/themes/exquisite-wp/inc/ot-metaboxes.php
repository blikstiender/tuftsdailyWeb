<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */


function _custom_meta_boxes() {

	/**
	 * Get sidebar list created by users
	 * 
	 */
	$sidebars = ot_get_option('sidebars');
	$sidebars_array = array();
	$sidebars_count = 0;
	if(!empty($sidebars)){
	    foreach($sidebars as $sidebar){
	        $sidebars_array[$sidebars_count++] = array(
	            'label' => $sidebar['title'],
	            'value' => $sidebar['id']
	        );
	    }
	}
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $post_meta_box = array(  
    'id'          => 'post_meta_minigallery',
    'title'       => 'Post Settings',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
    	      array(
        'id'          => 'tab2',
        'label'       => 'Review Settings',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Is this a review post?',
        'id'          => 'is_review',
        'type'        => 'radio',
        'desc'        => 'Select yes, if you would like to display review settings',
        'choices'     => array(
          array(
            'label'       => 'Yes',
            'value'       => 'yes'
          ),
          array(
            'label'       => 'No',
            'value'       => 'no'
          )
        ),
        'std'         => 'no'
      ),
      array(
        'label'       => 'Rating Type',
        'id'          => 'rating_type',
        'type'        => 'radio',
        'desc'        => 'Would you like to display star or percantage ratings',
        'choices'     => array(
          array(
            'label'       => 'Star',
            'value'       => 'star'
          )
          
        ),
        'std'         => 'star',
        'condition'   => 'is_review:is(yes)'
      ),
      array(
        'label'       => 'Star Ratings',
        'id'          => 'post_ratings',
        'type'        => 'list-item',
        'desc'        => 'Please add features to rate this review for',
        'settings'    => array(
          array(
            'label'       => 'Feature Rating',
            'id'          => 'feature_rating',
            'type'        => 'select',
            'desc'        => 'Rating of this feature',
            'choices'     => array(
              array(
                'label'       => '5',
                'value'       => '5'
              ),
              array(
                'label'       => '4.5',
                'value'       => '4.5'
              ),
              array(
                'label'       => '4',
                'value'       => '4'
              ),
              array(
                'label'       => '3.5',
                'value'       => '3.5'
              ),
              array(
                'label'       => '3',
                'value'       => '3'
              ),
              array(
                'label'       => '2.5',
                'value'       => '2.5'
              ),
              array(
                'label'       => '2',
                'value'       => '2'
              ),
              array(
                'label'       => '1.5',
                'value'       => '1.5'
              ),
              array(
                'label'       => '1',
                'value'       => '1'
              ),
              array(
                'label'       => '0.5',
                'value'       => '0.5'
              )
              ,
              array(
                'label'       => '0',
                'value'       => '0'
              )
            ),
            'std'         => '5'
          )
        ),
        'condition'   => 'is_review:is(yes)'
      ),
      array(
        'label'       => 'Rating Summary',
        'id'          => 'rating_summary',
        'type'        => 'textarea-simple',
        'desc'        => 'Short description to display next to average value',
        'std'         => '',
        'rows'        => '3',
        'condition'   => 'is_review:is(yes)'
      )
    )
  );

  $post_meta_box_video = array(
    
    'id'          => 'post_meta_video',
    'title'       => 'Video Settings',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Video URL',
        'id'          => 'post_video',
        'type'        => 'textarea-simple',
        'desc'        => 'Video URL. You can find a list of websites you can embed here: <a href="http://codex.wordpress.org/Embeds">Wordpress Embeds</a>',
        'std'         => '',
        'rows'        => '5'
      )
    )
  );
  
  $page_meta_box_sidebar = array(
    'id'        => 'meta_box_sidebar',
    'title'     => 'Layout',
    'pages'     => array('page'),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'sidebar_set',
        'label'       => 'Sidebar',
        'type'        => 'sidebar_select'
        )
      )
    );
  
  $post_meta_box_sidebar_gallery = array(
    'id'        => 'meta_box_sidebar_gallery',
    'title'     => 'Gallery',
    'pages'     => array('post'),
    'context'   => 'side',
    'priority'  => 'low',
    'fields'    => array(
      array(
        'id' => 'pp_gallery_slider',
        'type' => 'gallery',
        'desc' => '',
        'post_type' => 'post'
      )
     )
   );
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
   
   
	ot_register_meta_box( $post_meta_box_video );
	ot_register_meta_box( $post_meta_box );
  ot_register_meta_box( $page_meta_box_sidebar );
  
}
