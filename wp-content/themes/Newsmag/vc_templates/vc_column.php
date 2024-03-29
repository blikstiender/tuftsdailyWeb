<?php
    //new template - we will only keep this one
    global $td_column_count;


    $output = $el_class = $width = '';
    extract(shortcode_atts(array(
        'el_class' => '',
        'width' => '1/1',
        'css' => ''
    ), $atts));


    $td_column_count = $width;


    $el_class = $this->getExtraClass($el_class);
    $width = wpb_translateColumnWidthToSpan($width);

    $el_class .= ' wpb_column column_container';

    $css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class.vc_shortcode_custom_css_class($css, ' '), $this->settings['base']);
    $output .= "\n\t".'<div class="'.$css_class.'">';
    $output .= "\n\t\t".'<div class="wpb_wrapper">';
    $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
    $output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
    $output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";

    echo $output;

