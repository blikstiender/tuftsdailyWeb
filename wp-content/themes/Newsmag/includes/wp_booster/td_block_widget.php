<?php

/**
 * Class td_block_widget - used to create widgets from our blocks
 */



class td_block_widget extends WP_Widget {
    var $td_widget_builder;

    var $td_block_id = 0; // this is changed by td_blockx_widget s

    function __construct() {
        $this->td_widget_builder = new td_widget_builder($this);
        //get block map
        $this->td_widget_builder->td_map(td_global_blocks::get_instance($this->td_block_id)->get_map());
    }

    function form($instance) {
        $this->td_widget_builder->form($instance);
    }

    function update($new_instance, $old_instance) {
        return $this->td_widget_builder->update($new_instance, $old_instance);
    }

    function widget($args, $instance) {
        //add the td_block_widget class to the block via the short code atts
        if (!empty($instance['class'])) {
            $instance['class'] =  $instance['class'] . 'td_block_widget';
        } else {
            $instance['class'] = 'td_block_widget';
        }

        //render the instance
        echo td_global_blocks::get_instance($this->td_block_id)->render($instance);
    }
}
