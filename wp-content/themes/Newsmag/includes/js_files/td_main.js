"use strict";



/**
 * affix menu
 */
td_affix.init({
    menu_selector: '.td-header-main-menu',
    menu_wrap_selector: '.td-header-menu-wrap',
    tds_snap_menu: td_util.get_backend_var('tds_snap_menu'),
    tds_snap_menu_logo: td_util.get_backend_var('tds_logo_on_sticky')
});


/**
 * smooth scroll init
 */
/*
jQuery().ready(function () {
    if (td_detect.is_chrome === true && td_detect.is_osx === false) {
        td_smooth_scroll();
    }
});
*/


/**
 * sidebar init
 */
if (td_util.get_backend_var('tds_smart_sidebar') == 'enabled' && td_detect.is_ios === false) {
    jQuery(window).load(function() {
        // find the rows and the sidebars objects and add them to the magic sidebar object array
        jQuery('.td-ss-row').each(function () {
            //@todo check to see if the sidebar + content is pressent
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery(this).children('.td-pb-span4').children('.wpb_wrapper');
            td_smart_sidebar_item.content_jquery_obj = jQuery(this).children('.td-pb-span8').children('.wpb_wrapper');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        });



        // check the page to see if we have smart sidebar classes (.td-ss-main-content and .td-ss-main-sidebar)
        if (jQuery('.td-ss-main-content').length > 0 && jQuery('.td-ss-main-sidebar').length > 0) {
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery('.td-ss-main-sidebar');
            td_smart_sidebar_item.content_jquery_obj = jQuery('.td-ss-main-content');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        }

        td_smart_sidebar.td_events_resize();
    });
}

