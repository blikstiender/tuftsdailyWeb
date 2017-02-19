<?php
/*
 * This is the config file for the theme.
 */

define("TD_THEME_NAME", "Newsmag");
define("TD_THEME_VERSION", "1.3.1");
define("TD_THEME_DOC_URL", "http://forum.tagdiv.com/newsmag-documentation/");
define("TD_THEME_DEMO_URL", "http://demo.tagdiv.com/" . strtolower(TD_THEME_NAME));
define("TD_FEATURED_CAT", "Featured"); //featured cat name
define("TD_FEATURED_CAT_SLUG", "featured"); //featured cat slug
define("TD_THEME_OPTIONS_NAME", "td_010"); //where to store our options


define("TD_THEME_WP_BOOSTER", "3.0"); //prevents multiple instances of the framework

//if no deploy mode is selected, we use the final deploy built
if (!defined('TD_DEPLOY_MODE')) {
    define("TD_DEPLOY_MODE", 'deploy');
}


switch (TD_DEPLOY_MODE) {
    default:
        //deploy version - this is the version that we ship!
        define("TD_DEBUG_LIVE_THEME_STYLE", false);
        define("TD_DEBUG_IOS_REDIRECT", false);
        define("TD_DEBUG_USE_LESS", false);
        break;

    case 'dev':
        //dev version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        define("TD_DEBUG_IOS_REDIRECT", true);
        define("TD_DEBUG_USE_LESS", true); //use less on dev
        break;

    case 'demo':
        //demo version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        define("TD_DEBUG_IOS_REDIRECT", true); // remove themeforest iframe from ios devices on demo only!
        define("TD_DEBUG_USE_LESS", false);
        break;
}



/**
 * speed booster v 3.0 hooks - prepare the framework for the theme
 * is also used by td_deploy - that's why it's a static class
 * Class td_wp_booster_hooks
 */
class td_wp_booster_config {


    /**
     * setup the global theme specific variables
     * @depends td_global
     */
    static function td_global_after() {

        /**
         * we need the post list array to be in this format for fast lookup in single.php via the array key
         * the array is used in the theme via the @see td_panel_generator::helper_td_global_list_to_panel_values converter
         *
         *
         */
        td_global::$post_templates_list = array (
            '' => array(
                'text' => 'Default',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-0.png'
            ),
            'single_template_1' => array(
                'text' => 'Single template 1',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-1.png'
            ),
            'single_template_2' => array(
                'text' => 'Single template 2',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-2.png'
            ),
            'single_template_3' => array(
                'text' => 'Single template 3',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-3.png'
            ),
            'single_template_4' => array(
                'text' => 'Single template 4',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-4.png'
            ),
            'single_template_5' => array(
                'text' => 'Single template 5',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-5.png'
            ),
            'single_template_6' => array(
                'text' => 'Single template 6',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-6.png'
            ),
            'single_template_7' => array(
                'text' => 'Single template 7',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-7.png'
            ),
            'single_template_8' => array(
                'text' => 'Single template 8',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-8.png'
            )
        );



        td_global::$smart_lists = array (
            '' => array(
                'text' => 'Default',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/smart-list-0.png'
            ),

            'td_smart_list_1' => array(
                'text' => 'Smart list 1',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/smart-list-1.png'
            ),

            'td_smart_list_2' => array(
                'text' => 'Smart list 2',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/smart-list-2.png'
            ),

            'td_smart_list_3' => array(
                'text' => 'Smart list 3',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/smart-list-3.png'
            ),

            'td_smart_list_4' => array(
                'text' => 'Smart list 4',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/smart-list-4.png'
            )
        );


        // array (module_id => array(module_properties))
        td_global::$modules_list = array (
            'td_module_1' => array (
                'text' => 'Module 1',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-1.png',
                'used_on_blocks' => array ('td_block_3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,     // in panel
                'enabled_on_loops' => true,                 // in panel
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_2' => array (
                'text' => 'Module 2',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-2.png',
                'used_on_blocks' => array ('td_block_4'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_3' => array (
                'text' => 'Module 3',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-3.png',
                'used_on_blocks' => array ('td_block_5'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_4' => array (
                'text' => 'Module 4',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-4.png',
                'used_on_blocks' => array ('td_block_1', 'td_block_2'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_5' => array (
                'text' => 'Module 5',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-5.png',
                'used_on_blocks' => array ('td_block_6'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),


            'td_module_6' => array (
                'text' => 'Module 6',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-6.png',
                'used_on_blocks' => array ('td_block_1', 'td_block_2', 'td_block_7'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_7' => array (
                'text' => 'Module 7',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-7.png',
                'used_on_blocks' => array ('td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_8' => array (
                'text' => 'Module 8',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-8.png',
                'used_on_blocks' => array ('td_block_9'),
                'excerpt_title' => 15,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_9' => array (
                'text' => 'Module 9',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-9.png',
                'used_on_blocks' => array ('td_block_10'),
                'excerpt_title' => 15,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_10' => array (
                'text' => 'Module 10',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-10.png',
                'used_on_blocks' => array ('td_block_11'),
                'excerpt_title' => 15,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_11' => array (
                'text' => 'Module 11',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-11.png',
                'used_on_blocks' => array ('td_block_12'),
                'excerpt_title' => 15,
                'excerpt_content' => 35,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_12' => array (
                'text' => 'Module 12',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-12.png',
                'used_on_blocks' => '',
                'excerpt_title' => 30,
                'excerpt_content' => 60,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_13' => array (
                'text' => 'Module 13',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-13.png',
                'used_on_blocks' => '',
                'excerpt_title' => 30,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_14' => array (
                'text' => 'Module 14',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-14.png',
                'used_on_blocks' => array ('td_block_13'),
                'excerpt_title' => 30,
                'excerpt_content' => 40,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_15' => array (
                'text' => 'Module 14',
                'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-15.png',
                'used_on_blocks' => array ('td_block_13'),
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_mx1' => array (
                'text' => 'Module MX1',
                'img' => '',
                'used_on_blocks' => array ('td_block_14', 'td_block_15'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_mx2' => array (
                'text' => 'Module MX2',
                'img' => '',
                'used_on_blocks' => array ('td_block_15'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_mx3' => array (
                'text' => 'Module MX3',
                'img' => '',
                'used_on_blocks' => array ('td_block_13'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_mx4' => array (
                'text' => 'Module MX4',
                'img' => '',
                'used_on_blocks' => array ('td_block_16'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            )

            ,
            'td_module_related_posts' => array (
                'text' => 'Related posts module',
                'img' => '',
                'used_on_blocks' => array ('td_related_posts'), //not used yet on this module
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_mega_menu' => array (
                'text' => 'Mega menu module',
                'img' => '',
                'used_on_blocks' => array ('td_mega_menu'), //not used yet on this module
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_big_grid' => array (
                'text' => 'Big grid module',
                'img' => '',
                'used_on_blocks' => array ('td_block_big_grid'), //not used yet on this module
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            ),
            'td_module_slide' => array (
                'text' => 'Slider module',
                'img' => '',
                'used_on_blocks' => array ('td_slide'), //not used yet on this module
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true
            )


        );


        //print_r(td_global::$post_templates_list);

        td_global::$js_files = array_merge (td_global::$js_files, array(
            'td_main' => '/includes/js_files/td_main.js'
        )); /** add our theme specific javascript files, we just marge them to the existing ones from wp booster @see td_global */


        /**
         * the stacks are stored in /includes/stacks
         * stack_filename (without .txt) => stack_name
         * @var array
         */
        td_global::$stacks = array (
            'classic_blog' => 'Classic blog',
            'fashion' => 'Fashion',
            'sport' => 'Sport',
            'tech' => 'Tech',
            'video' => 'Video',
        );





    }


    /**
     * hook up, is called at EOF
     */
    static function hook() {
        add_action('td_global_after', array('td_wp_booster_config', 'td_global_after'));
    }
}

td_wp_booster_config::hook();