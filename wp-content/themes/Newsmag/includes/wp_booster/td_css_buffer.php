<?php

class td_css_buffer {
    static $css_header_buffer = '';

    static function add($css) {
        self::$css_header_buffer .= "\n" . $css;
    }

    static function render() {
        //run the filter
        self::$css_header_buffer = apply_filters("td_css_buffer_render", self::$css_header_buffer);

        if (trim(self::$css_header_buffer) != '') {
            self::$css_header_buffer = "\n<!-- Style compiled by theme -->" . "\n\n<style>\n    " . self::$css_header_buffer . "\n</style>\n\n";
            echo self::$css_header_buffer; // echo out the buffer
        } else {
            return '';
        }
    }

    static function hook() {
        if (defined('TD_SPEED_BOOSTER')) {
            //if we have the speed booster plugin, we will render the css at the end of the page
            add_action('wp_footer',  array('td_css_buffer', 'render'), 100);
        } else {
            //default, render at the top of the page
            add_action('wp_head', array('td_css_buffer', 'render'), 15); //priority 10 is used by the css compiler
        }
    }
}

td_css_buffer::hook();



