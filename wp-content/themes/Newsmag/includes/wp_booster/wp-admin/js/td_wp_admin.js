/*

    tagDiv wp-admin js

    used on posts meta options and in different places in the theme

 */


//init the variable if it's undefined, sometimes wordpress will not run the wp_footer hooks in wp-admin (in modals for example)
if (typeof td_get_template_directory_uri === 'undefined') {
    td_get_template_directory_uri = '';
}



function td_widget_attach_color_picker() {
    //hide all colorpickers
    jQuery('.td-color-picker-widget').hide();

    // tagdiv widget colorpicker
    jQuery('.widgets-php .td-color-picker-widget').each(function(){
        var $this = jQuery(this);
        var id = $this.attr('rel');
        $this.farbtastic('#' + id);
    });

    jQuery('.td-color-picker-field').click(function(){
        jQuery('#' + jQuery(this).data('td-w-color')).fadeIn();
    });


    jQuery(document).mousedown(function() {
        jQuery('.td-color-picker-widget').each(function() {
            var display = jQuery(this).css('display');
            if ( display == 'block' )
                jQuery(this).fadeOut();
        });
    });
}





jQuery().ready(function() {



    td_widget_attach_color_picker();

    //alert(td_get_template_directory_uri);


    /*  ----------------------------------------------------------------------------
        Sidebar manager
     */
    jQuery('.td_rename').click(function(event){
        event.preventDefault();
        jQuery('.td-modal').hide('fast');
        jQuery(jQuery(this).attr('href')).show('fast');
    });


    jQuery('.td_modal_cancel').click(function(event){
        event.preventDefault();
        jQuery('.td-modal').hide('fast');
    });




    /*  ----------------------------------------------------------------------------
         Template settings
     */

    td_show_template_settings_on_selected_2();

    jQuery('#page_template').change(function() {
        td_show_template_settings_on_selected_2();
    });



    jQuery( ".td_ad_code_type" ).each(function( index ) {
        jQuery(this).change(function() {
            var cur_template = jQuery(this).find(' option:selected').text();
            if (cur_template == 'Asynchronous') {
                jQuery(this).parent().parent().find('.td-ga-sync').hide();
                jQuery(this).parent().parent().find('.td-ga-async').show();
            } else {
                jQuery(this).parent().parent().find('.td-ga-sync').show();
                jQuery(this).parent().parent().find('.td-ga-async').hide();
            }
        });
    });





});


function td_show_template_settings_on_selected_2() {
    if (jQuery('#post_type').val() == 'post') {
        return;
    }


    //text and image after template drop down
    td_add_text_image_after_template_drop_down();


    //hide all elements
    //jQuery('#postbox-container-2 [id$=_metabox]').hide();
    jQuery('#td_homepage_loop_metabox, #td_homepage_loop_slide_metabox').hide(); //it's better to hide them by id for compatibility with other plugins

    var cur_template = jQuery('#page_template option:selected').text();
    switch (cur_template) {
        case 'Pagebuilder + latest articles + pagination':
            jQuery('#td_homepage_loop_metabox').slideDown();
            jQuery('#td_homepage_loop_filter_metabox').slideDown();
            jQuery('.td-doc-image-homepage-loop-bg, #td_page_metabox').hide();
            jQuery('.td-doc-image-homepage-loop').show();
            jQuery('#td_unique_articles_metabox').show();

            td_add_text_image_after_template_drop_down('<span class="td-wpa-info"><strong>Tip:</strong> Homepage made from a pagebuilder section and a loop below. <ul><li>The loop supports an optional sidebar and advanced filtering options. </li> <li>You can find all the options of this template if you scroll down.</li></ul></span>');
            break;


        case 'Default Template':
            jQuery('#td_page_metabox').slideDown();
            jQuery('#td_homepage_loop_metabox, #td_homepage_loop_slide_metabox').hide();
            jQuery('#td_homepage_loop_filter_metabox').hide();
            jQuery('#td_unique_articles_metabox').hide();

            td_add_text_image_after_template_drop_down('<span class="td-wpa-info"><strong>Tip:</strong> Default template, perfect for visual composer or content pages. <ul><li>If visual composer is used, the page will be without a title.</li> <li>If it\'s a content page the template will generate a title</li></ul></span>');
            break;

        case 'Pagebuilder + page title':
            jQuery('#td_homepage_loop_filter_metabox').hide();
            jQuery('#td_unique_articles_metabox').hide();
            jQuery('#td_page_metabox').slideDown();
            td_add_text_image_after_template_drop_down('<span class="td-wpa-info"><strong>Tip:</strong> Useful when you want to create a page that has a standard title using visual composer</span>');

            break;


    }


}



//insert text and image after template pull down on add/edit pages
function td_add_text_image_after_template_drop_down(the_text) {

    if(document.getElementById("td_after_template_container_id")) {

        var after_element = document.getElementById("td_after_template_container_id");

        after_element.innerHTML = "";

        if(typeof the_text != 'undefined') {
            after_element.innerHTML = the_text;
        }

    } else {

        if(document.getElementById("page_template")) {
            //create the container
            var after_element = document.createElement("div");
            after_element.setAttribute("id", "td_after_template_container_id");

            //insert the element in DOM, after template pull down
            document.getElementById("page_template").parentNode.insertBefore(after_element, document.getElementById("page_template").nextSibling);
        }
    }
}