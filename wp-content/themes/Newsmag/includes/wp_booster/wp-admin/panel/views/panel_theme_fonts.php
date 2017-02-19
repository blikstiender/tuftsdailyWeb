<?php echo td_panel_generator::box_start('Documentation on how to use custom fonts');?>



    <!-- info text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>You can select from here what character subsets will be loaded for each google font. The character subset will be loaded only if the font supports the specific glyphs. Try to enable only the subsets that you use because the site will load slower with each additional subset.</p>
            <p><a href="?page=td_theme_panel&td_page=td_view_custom_fonts" target="_blank" class="td-big-button">Add custom fonts</a></p>
        </div>
    </div>



<?php echo td_panel_generator::box_end();?>

<?php
class td_panel_custom_typograpfy {

    function __construct($post = '') {
        //big sections in witch the td_fonts::$typography_sections are nested
        $td_section_separator_array = array(
            0  => 'Header',
            8 => 'Modules and Blocks General',
            15 => 'Modules and Blocks Article Title',
            41 => 'Post title',
            50 => 'Post content',
            60 => 'Post elements',
            74 => 'Pages',
            82 => 'Other'
        );

        echo td_panel_generator::ajax_box('Header' , array('start_section' => 0, 'end_section' => 7, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Modules and Blocks General' , array('start_section' => 8, 'end_section' => 14, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Modules and Blocks Article Title' , array('start_section' => 15, 'end_section' => 40, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Post title' , array('start_section' => 41, 'end_section' => 49, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Post content' , array('start_section' => 50, 'end_section' => 59, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Post elements' , array('start_section' => 60, 'end_section' => 73, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Pages' , array('start_section' => 74, 'end_section' => 81, 'td_ajax_view' => 'td_theme_fonts'));

        echo td_panel_generator::ajax_box('Other' , array('start_section' => 82, 'end_section' => 1000, 'td_ajax_view' => 'td_theme_fonts'));
    }
}


//call the generate function to create the fonts control pannel
$object_custom_typograpfy = new td_panel_custom_typograpfy();