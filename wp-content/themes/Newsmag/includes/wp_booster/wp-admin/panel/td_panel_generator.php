<?php


/**
 * @param $read_array -
   'ds' => 'data source ID',
   'item_id' = > 'the category id for example', - OPTIONAL
   'option_id' => 'the option id ex: background'
   'values' =>  array(
 *                      array('text' => '', 'val' => ''),
 *                      array('text' => '', 'val' => '')
 *                  )
 *
   'values' => array(
 *                      array('text' => '', 'val' => '', 'img' => ''),
 *                      array('text' => '', 'val' => '', 'img' => '')
 *                  )
 *
 *
 */

class td_panel_generator {
    static $td_user_created_menus; // here we store the user created menus


    // fake constructor because we use a static class ffs
    static function init_class() {

        //read the user created menu from wordpress
        $td_menus_array = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
        foreach ($td_menus_array as $td_menu) {
            self::$td_user_created_menus[] = array(
                'val' => $td_menu->term_id,
                'text' => $td_menu->name
            );
        }

        //adding empty val
        self::$td_user_created_menus[] = array(
            'val' => '',
            'text' => '-- No Menu --'
        );

    }


    /**
     * creates a classic input text box
     *
     * @param $params_array
     * 'ds' => 'data source ID',
     * 'item_id' = > 'the category id for example', - OPTIONAL
     * 'option_id' => 'the option id ex: background'
     * 'placeholder' => placeholder text, used only by input
     *
     * @return string
     */
    static function input($params_array) {
        //read the placeholder if available
        $placeholder = '';
        if (!empty($params_array['placeholder'])) {
            $placeholder = 'placeholder="' . $params_array['placeholder'] . '"';
        }

        //return the damn input
        return '<input type="text" class="td-panel-input" name="' . self::generate_name($params_array) . '" value="' . stripcslashes(htmlspecialchars(td_panel_data_source::read($params_array), ENT_QUOTES)) . '" ' . $placeholder . '/>';
    }


    /**
     * creates a drop down (select box)
     *
     *  'ds' => 'td_category',
     *  'item_id'=> '5',
     *  'option_id' => 'background',
     *   'values' => array(
     *      array('text' => '#333', 'val' => ''),
     *      array('text' => '#888', 'val' => '#888')
     *  )
     *
     *
     * @param $params_array
     * @return string
     */
    static function dropdown($params_array) {
        $select_field = '';

        //check for user saved data
        $user_data = td_panel_data_source::read($params_array);

        $select_field = '<div class="td-select-style-overwrite">
                            <select class="td-panel-dropdown" name="' . self::generate_name($params_array) . '">';

        //we can have empty values - ex: when no menu is defined in wordpress, the select with the menus will be empty!
        if (!empty($params_array['values'])) {
            foreach($params_array['values'] as $select_options) {
                if($user_data == $select_options['val']) {
                    $select_field .= '<option value="' . stripcslashes($select_options['val']) . '" selected="selected">' . stripcslashes($select_options['text']) . '</option>';
                } else {
                    $select_field .= '<option value="' . stripcslashes($select_options['val']) . '">' . stripcslashes($select_options['text']) . '</option>';
                }
            }
        }



        $select_field .= '</select>
                        </div>';

        return $select_field;
    }





    /**
     * Create a checkbox iOS style
     *
     * @param $checkbox_array
     *
     * $checkbox_array = > array (
     *                             ds => '',
     *                             option_id=> '',
     *                             title => '',
     *                             text => '',
     *                             true_value => ''
     *                             false_value => ''
     *                           )
     *
     * @param $checkbox_array
     * @return string
     */
    static function checkbox($checkbox_array) {
        //create a unique id
        $control_uniq_id = td_global::td_generate_unique_id();
        $input_hidden_value = $checkbox_array['false_value'];
        $class_buton_active = $class_control_active ='';

        //check for user saved data
        $user_data = td_panel_data_source::read($checkbox_array);


        //check to see if the checkbox is active when we create it
        if($user_data == $checkbox_array['true_value']) {
            $input_hidden_value = $checkbox_array['true_value'];
            $class_buton_active = 'td-checbox-buton-active';
            $class_control_active = 'td-checkbox-active';
        }

        //building the control
        $buffy = '<div class="td-checkbox ' . $class_control_active . '" data-uid="' . $control_uniq_id . '" data-val-true="' . $checkbox_array['true_value'] . '" data-val-false="' . $checkbox_array['false_value'] . '">
                    <div class="td-checbox-buton ' . $class_buton_active . '"></div>
                  </div>
                  <input type="hidden" name="' . self::generate_name($checkbox_array) . '" id="' . $control_uniq_id . '" value="' . $input_hidden_value . '">';

        return $buffy;
    }


    static function radio($params_array) {

    }


    /**
     * visual_select_o stands for orizontaly
     * this function create a visual panel for selecting an item from an orizontal list
     * @param $params_array
     * @return string
     *
     * * $params_array = > array (
     *                             ds => '',
     *                             option_id=> '',
     *                             text => '',
     *                             values =>  array(
     *                                              array('text' => '', 'val' => '', class => '', 'img' => '', 'title' => ''),
     *                                              array('text' => '', 'val' => '', class => '', 'img' => '', 'title' => '')
     *                                              ),
     *                             'selected_value' => ''
     *                           )
     */
    static function visual_select_o($params_array) {
        $data_option_value = '';

        //holds the css calss used to separates the elemets in list
        $class_separator = 'td-small-wrapper-o td-small-wrapper-o-separator';

        //create a unique id
        $control_uniq_id = td_global::td_generate_unique_id();

        //check for user saved data
        if(!empty($params_array['selected_value'])) {
            $user_data = $params_array['selected_value'];
        } else {
            $user_data = td_panel_data_source::read($params_array);
        }

        //create a uniq id for the control wrapper,
        //used by javascript to remove active class from all item in the list (only one item can have item class, but this is the parent of all items )
        $control_wrapper_id = 'wrap_' . td_global::td_generate_unique_id();

        //building the control
        $buffy = '<div id="' . $control_wrapper_id . '">';


        //count the nr of elements
        $count_array = count($params_array['values']);

        //creates the list of option
        $nr = 0;
        foreach($params_array['values'] as $list_option) {
            $div_uniq_id = td_global::td_generate_unique_id();

            $add_active_class = '';
            if($user_data == $list_option['val']){
                $add_active_class = 'td-visual-selector-active';
            }


            //check for added class(es)
            $extra_class = '';
            if(!empty($list_option['class'])) {
                $extra_class = $list_option['class'];
            }


            $nr++;

            //@todo add here for default support $user_data
            $buffy .= '<div class="' . $class_separator . '"><div class="td-visual-selector-o ' . $extra_class .'" id="' . $div_uniq_id . '"><a href="#" title="' . $list_option['title'] . '"><img src="' . $list_option['img'] . '" class="td-visual-selector-o-img ' . $add_active_class . '" data-uid="' . $control_uniq_id . '" data-option-value="' . $list_option['val'] . '" data-control-wrapper="' . $control_wrapper_id . '" border="0" /></a></div><div class="td_vso_caption">' . $list_option['text'] . '</div></div>';
        }

        $buffy .= '</div><input type="hidden" name="' . self::generate_name($params_array) . '" id="' . $control_uniq_id . '" value="'. $user_data .'">';

        return $buffy;

    }



    /**
     * visual_select_o stands for verticaly
     * this function create a visual panel for selecting an item from an vertical list
     * @param $params_array
     * @return string
     *
     * * $params_array = > array (
     *                             ds => '',
     *                             option_id=> '',
     *                             text => '',
     *                             values =>  array(
     *                                              array('text' => '', 'val' => '', 'img' => '', 'title' => ''),
     *                                              array('text' => '', 'val' => '', 'img' => '', 'title' => '')
     *                                              )
     *                           )
     */
    static function visual_select_v($params_array) {
        //create a unique id
        $control_uniq_id = td_global::td_generate_unique_id();

        //check for user saved data
        $user_data = td_panel_data_source::read($params_array);

        //create a uniq id for the control wrapper,
        //used by javascript to remove active class from all item in the list (only one item can have item class, but this is the parent of all items )
        $control_wrapper_id = 'wrap_' . td_global::td_generate_unique_id();

        //building the control
        $buffy = '<div id="' . $control_wrapper_id . '">';

        //creates the list of option
        foreach($params_array['values'] as $list_option) {
            $div_uniq_id = td_global::td_generate_unique_id();

            $add_active_class = '';
            if($user_data == $list_option['val']){
                $add_active_class = 'td-visual-selector-active';
            }

            //@todo add here for default support $user_data

            $buffy .= '<div class="td-visual-selector-v ' . $add_active_class . '" id="' . $div_uniq_id . '"><div>' . $list_option['val'] . '</div><a href="#" title="' . $list_option['title'] . '" data-uid="' . $control_uniq_id . '" data-parent-id="' . $div_uniq_id . '" data-option-value="' . $list_option['val'] . '" data-control-wrapper="' . $control_wrapper_id . '"><img src="' . $list_option['img'] . '"></a></div>';
        }

        //if we need to display description notice
        $descrption_notice = '';
        if(array_key_exists('text', $params_array) && !empty($params_array['text'])) {
            $descrption_notice = '<div class="td-description-notice">' . $params_array['text'] . '</div>';
        }

        $buffy .= '<input type="hidden" name="' . self::generate_name($params_array) . '" id="' . $control_uniq_id . '" value="'. $user_data .'">
                    ' . $descrption_notice . '
                 </div>';

        return $buffy;

    }


    /**
     * control to create the sidebar dropdown
     *
     * @param $params_array
     * @return string
     *
     * array(
     *      'ds' => '',
     *      'item_id' => '',
     *      'option_id' => '',
     *      'selected_value' =>
     *      )
     *
    */
    static function sidebar_pulldown ($params_array) {
        $buffy = '';

        //nr of chars displayd as name option
        $sub_str_val = 35;

        //get theme settings (sidebars) from wp_options
        //get current sidebars
        $theme_sidebars = td_util::get_option('sidebars');


        //get control selected value
        $control_value = '';
        if(!empty($params_array['selected_value'])) {
            $control_value = $params_array['selected_value'];
        } else {
            $control_value = td_panel_data_source::read($params_array);
        }

        if($control_value == ''){
            $control_value = 'Default Sidebar';
        }

        //buiding the control
        //create unique ids for pulldown display area and for list of options (uniqid())
        $list_uniq_id = td_global::td_generate_unique_id();
        $controler_unique_id = td_global::td_generate_unique_id();

        //field to add new sidebar, for this pulldown
        $new_sidebar_field_uniq_id = 'new_sidebar_' . $controler_unique_id;

        //hiddden field, for this pulldown
        $hidden_field_uniq_id = 'hidden_' . $controler_unique_id;

        $buffy .= '<div class="td-pulldown-sidebars-controller">
            <div class="td-wrapper-selected-sidebar">
                <a id="' . $controler_unique_id . '" class="td-selected-sidebar" data-list-id="' . $list_uniq_id . '" title="' . $control_value . '">' . substr($control_value, 0, $sub_str_val) . '</a><a class="td-arrow-pulldown-sidebars" data-list-id="' . $list_uniq_id . '" ></a>
            </div>
            <div class="td-pulldown-sidebars-list" id="' . $list_uniq_id . '">';

                    $buffy .= '<div class="td_sidebars_for_replace" data-controlelr-id="' . $controler_unique_id . '">';

                            //display the default sidebar
                            $buffy .= '<div class="td-option-sidebar-wrapper"><a class="td-option-sidebar" data-area-dsp-id="' . $controler_unique_id . '" title="Default Sidebar">Default Sidebar</a></div>';

                            //create list options
                            if (is_array($theme_sidebars)) {
                                foreach($theme_sidebars as $key_sidebar_option => $sidebar_option){
                                    $buffy .= '<div class="td-option-sidebar-wrapper"><a class="td-option-sidebar" data-area-dsp-id="' . $controler_unique_id . '" title="' . $sidebar_option . '">' . substr(str_replace(array('"', "'"), '`', $sidebar_option), 0, $sub_str_val) . '</a><a class="td-delete-sidebar-option" data-sidebar-key="' . $key_sidebar_option . '"></a></div>';
                                }

                            }

                    //end of the list with sidebars options for replace
                    $buffy .= '</div>';

                    //add the input field, to add new sidebars
                    $buffy .= '<div class="td-new-sidebar-input"><input type="text" name="' . $new_sidebar_field_uniq_id . '" id="' . $new_sidebar_field_uniq_id . '" class="td_new_sidebar_field" placeholder="Create a new sidebar"><a class="td-button-add-new-sidebar" data-field-new-sidebar="' . $new_sidebar_field_uniq_id . '" data-sidebar-option-list="' . $list_uniq_id . '">Create</a></div>';

        //end of the list with sidebars options, all options
        $buffy .= '</div>';

        //if Default Widgets Sidebar is selected then put empty in the hidden field
        if($control_value == 'Default Sidebar'){
            $control_value = '';
        }
        return $buffy . '
        <input type="hidden" name="' . self::generate_name($params_array) . '" id="' . $hidden_field_uniq_id . '" value="' . $control_value . '">
        </div>';
    }


    //upload image control
    static function upload_image($params_array) {
        $contro_unique_id = td_global::td_generate_unique_id();

        $class_hidden = ' td-class-hidden ';

        $display_img_id = 'upd_img_id_' . $contro_unique_id;

        //get control option
        $control_value = td_panel_data_source::read($params_array);
        $image_path = $control_value;
        if(!empty($control_value)){
            $class_hidden = '';
        }else {
            $image_path = get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/no_img_upload.png';
        }

        $buffy = '
            <div class="td_wrapper_upload_control">
                <div id="' . $contro_unique_id . '_display" class="td_upload_container_for_image ' . $class_hidden . '"><img src="' . $image_path .  '" id="' . $display_img_id . '" width="66" height="66" class="td_upd_image_display_small_image"></div>
                <div class="td_upload_image_controls">
                    <input type="text" id="' . $contro_unique_id .'" name="' . self::generate_name($params_array) . '" value="' . $control_value . '" class="td_upload_field_link_image" />
                    <div><a id="' . $contro_unique_id . '_button" class="td_upload_button">Upload</a><a id="' . $contro_unique_id . '_button_delete" class="td_delete_image_button ' . $class_hidden . '" data-control-id="' . $contro_unique_id . '">Remove</a><script language="JavaScript">td_upload_image("' . $contro_unique_id . '");</script></div>
                </div>
            </div>';

        return $buffy;
    }


    /**
     * control to create radio buttons control
     *
     * @param $params_array
     * @return string
     *
     * array(
     *      'ds' => '',
     *      'option_id' => '',
     *      'values' => array(
     *                     array('text' => '', 'val' => ''),
     *                     array('text' => '', 'val' => ''),
     *                     array('text' => '', 'val' => '')
     *                 )
     *      )
     *
     */
    static function radio_button_control($params_array) {
        $contro_unique_id = td_global::td_generate_unique_id();
        $hidden_field_radio_uniq_id = 'hidden_' . $contro_unique_id;

        //get control option
        $control_value = td_panel_data_source::read($params_array);

        $display_option = $radio_option_border_class_selected = '';
        $top_option_border_class = ' td-radio-control-option-border-top';

        $buffy = '<div class="td-wrapper-radio-buttons" id="' . $contro_unique_id . '">';

        //creates the radio button list
        $icont = 1;
        foreach($params_array['values'] as $radio_option) {
            if($icont > 1){
                $top_option_border_class = '';
            }

            //display as a text link                 // only a part of the string; all the string shall be addet as title
            $display_option = $radio_option['text'];//mb_substr($radio_option['text'], 0, 38,'utf-8');

            if($control_value == $radio_option['val']){
                $radio_option_border_class_selected = ' td-radio-control-option-selected';
            }

            $buffy .= '
                <a class="td-panel-remove-transitions td-radio-control-option' . $top_option_border_class . $radio_option_border_class_selected . '" title="' . strip_tags($radio_option['text']) . '" data-control-id="' . $contro_unique_id . '" data-option-value="' . $radio_option['val'] . '">' . $display_option . '</a>
            ';
            $icont++;
            $radio_option_border_class_selected = '';
        }

        return $buffy . '<input type="hidden" name="' . self::generate_name($params_array) . '" id="' . $hidden_field_radio_uniq_id . '" value="' . $control_value . '"></div>';
    }


    /**
    color piker control
     * @param $params_array
     *
     * 'ds' => '',
     * 'option_id' => '',
     * 'default_color' => '',
     * 'selected_value' => ''
     */

    static function color_picker($params_array) {
        $control_unique_id = td_global::td_generate_unique_id();

        //get control option
        if(!empty($params_array['selected_value'])) {
            $control_value = $params_array['selected_value'];
        } else {
            $control_value = td_panel_data_source::read($params_array);
        }

        //check to see if we got the default in the database (the default is '' (empty) an we replaceit with$params_array['default_color'] )
        $control_value = $control_value ? $control_value : $params_array['default_color'];

        //create color piker input and js

        return '
            <input type="text" id="' . $control_unique_id . '" value="' . $control_value . '" data-default-color="' . $params_array['default_color'] . '" name="' . self::generate_name($params_array) . '" />
            <input type="hidden" name="' . self::generate_default_values_name($params_array) . '" value="' . $params_array['default_color'] . '">
            <script>jQuery("#' . $control_unique_id . '").wpColorPicker();</script>';
    }


    //create control for displaying text and comments
    static function textarea($params_array) {

        if(!empty($params_array['value'])) {
            $control_value = $params_array['value'];
        } else {
            //get control option from database
            $control_value = stripcslashes(td_panel_data_source::read($params_array));
        }

        return '<textarea class="td_textarea_control" name="' . self::generate_name($params_array) . '">' . $control_value . '</textarea>';
    }







    static function box_start($panel_name, $is_open = true) {
        $box_uid = td_global::td_generate_unique_id();

        $buffy = '';
        $buffy .= '
        <div class="td-box ' . ($is_open === false ? 'td-box-close' : '') . '" id="' . $box_uid . '">
                        <div class="td-box-header td-box-header-js-inline" data-box-id="' . $box_uid . '" unselectable="on">
                            <div class="td-box-title">' . $panel_name . '</div>
                            <a class="td-box-toggle" data-box-id="' . $box_uid . '" href="#"><div class="td-box-close-open-icon"></div></a>
                        </div>

                        <div class="td-box-content" >
        ';

        return $buffy;
    }

    static function box_end() {
        return '
                    <div class="td-clear"></div>
                    </div>
                </div>
          ';
    }


    /**
     * this panel box will load an ajax view when it will open
     *  - the ajax views are in /wp-admin/panel/ajax_views
     * @param $panel_name - the display name of the panel
     * @param $ajax_view - the view that we want to load on click
     * @param array $ajax_params - the parameters array that we want to send to the view
     * @return the box
     */
    static function ajax_box($panel_name, $ajax_params = array()) {
        $box_uid = td_global::td_generate_unique_id();

        $tad_ajax_parameters = '';
        if(!empty($ajax_params)) {

            //this is added so we can directly send this json-encoded data(no javascript encoding necesary)
            $ajax_params['action'] = 'td_ajax_view_panel_loading';

            $tad_ajax_parameters = "data-panel-ajax-params='" . json_encode($ajax_params) . "'" ;
        }

        $buffy = '';
        $buffy .= '
        <div class="td-box td-box-close" id="' . $box_uid . '">
            <div class="td-box-header td-box-header-js-ajax" data-box-id="' . $box_uid . '"  ' . $tad_ajax_parameters . '  unselectable="on">
                <div class="td-box-title">' . $panel_name . '</div>
                <a class="td-box-toggle" data-box-id="' . $box_uid . '" href="#"><div class="td-box-close-open-icon"></div></a>
            </div>

            <div class="td-box-content"></div>
        </div>
        ';

        return $buffy;
    }


    /**
     * generates the names for the forms control ex: <input name="xxx"
     * @param $params_array
     * @return string
     */
    private static function generate_name($params_array) {
        if ($params_array['ds'] == 'td_category' or $params_array['ds'] == 'td_author' or $params_array['ds'] == 'td_ads' or $params_array['ds'] == 'td_fonts' or $params_array['ds'] == 'td_block_styles') {
            return $params_array['ds'] . '[' . $params_array['item_id'] . ']' . '[' . $params_array['option_id'] . ']';
        } elseif($params_array['ds'] == 'wp_widget') {
            return $params_array['ds'] . '[' . $params_array['sidebar'] . ']' . '[' . $params_array['widget_name'] . ']' . '[' . $params_array['attribute_key'] . ']';
        } else {
            return $params_array['ds'] . '[' . $params_array['option_id'] . ']';
        }
    }


    /**
     * generates the default values names for the forms control ex: <input name="td_default[data_source][option]... "
     * @param $params_array
     * @return string
     */
    private static function generate_default_values_name($params_array) {
        if ($params_array['ds'] == 'td_category' or $params_array['ds'] == 'td_author' or $params_array['ds'] == 'td_ads' or $params_array['ds'] == 'td_fonts' or $params_array['ds'] == 'td_block_styles') {
            return 'td_default' . '[' . $params_array['ds'] . ']' . '[' . $params_array['item_id'] . ']' . '[' . $params_array['option_id'] . ']';
        } elseif($params_array['ds'] == 'wp_widget') {
            return 'td_default' . '[' . $params_array['ds'] . ']' . '[' . $params_array['sidebar'] . ']' . '[' . $params_array['widget_name'] . ']' . '[' . $params_array['attribute_key'] . ']';
        } else {
            return 'td_default' . '[' . $params_array['ds'] . ']' . '[' . $params_array['option_id'] . ']';
        }
    }


    /**
     * return an array of modules used to select the article display view
     * @param string $view_name can be: default+enabled_on_loops | enabled_on_loops | enabled_on_more_articles_box
     * @return array of arrays
     *  array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-default.png')
     */
    static function helper_display_modules($view_name) {
        $modules_array = array();


        switch ($view_name) {
            case 'default+enabled_on_loops':
                // all modules that have enabled_on_loops + default
                $modules_array[] = array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/panel/module-default.png');

                foreach (td_global::$modules_list as $module_class => $module_array) {
                    if ($module_array['enabled_on_loops'] === true) {
                        $modules_array[] = array('text' => '', 'title' => '', 'val' => td_util::get_module_loop_id($module_class), 'img' => $module_array['img']);
                    }
                }
                break;

            case 'enabled_on_loops':
                // all modules that have enabled_on_loops
                foreach (td_global::$modules_list as $module_class => $module_array) {
                    if ($module_array['enabled_on_loops'] === true) {
                        $modules_array[] = array('text' => '', 'title' => '', 'val' => td_util::get_module_loop_id($module_class), 'img' => $module_array['img']);
                    }
                }
                break;

            case 'enabled_on_more_articles_box':
                // all modules that are enabled on the more articles box
                foreach (td_global::$modules_list as $module_class => $module_array) {
                    if ($module_array['enabled_on_more_articles_box'] === true) {
                        $modules_array[] = array('text' => '', 'title' => '', 'val' => td_util::get_module_loop_id($module_class), 'img' => $module_array['img']);
                    }
                }
                break;


        }

        return $modules_array;
    }




    /**
     *
     * @see td_global::$post_templates_list  -  uses this to generate an array for the visual_select_o control
     * @param $post_templates_list array
        array (
            '' => array(
            'text' => 'Default',
            'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-0.png'
        ),
            'single_template_1' => array(
            'text' => 'Single template 1',
            'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-1.png'
        ),
     *
     * @return array
        array(
          array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-0.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_1', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-1.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_2', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-2.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_3', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-3.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_4', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-4.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_5', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-5.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_6', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-6.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_7', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-7.png'),
          array('text' => '', 'title' => '', 'val' => 'single_template_8', 'img' => get_template_directory_uri() . '/includes/wp_booster/wp-admin/images/post-templates/post-templates-icons-8.png')
        )
     */
    static function helper_td_global_list_to_panel_values($post_templates_list) {
        $buffy_array = array();
        foreach ($post_templates_list as $template_value => $template_config) {
            $buffy_array[] = array(
                'text' => '',
                'title' => '',
                'val' => $template_value,
                'img' => $template_config['img']
            );
        }

        return $buffy_array;
    }


    static function helper_generate_used_on_block_list($block_class_array) {
        if (!empty($block_class_array)) {
            $block_class_array = str_replace(array('_', 'td'), ' ', $block_class_array);
            $block_class_array = array_map('trim', $block_class_array);
            return ' - used in ' . implode(', ', $block_class_array);
        }

        return '';
    }





}



td_panel_generator::init_class();

