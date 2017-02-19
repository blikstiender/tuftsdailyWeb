<?php
/**
 * td_global_blocks.php
 * no td_util loaded, no access to settings
 */

class td_global_blocks {
    private static $global_instances = array();

    static function add_instance($block_instance) {
        self::$global_instances[$block_instance->block_id] = $block_instance;

        //print_r(self::$global_instances);
    }

    static function get_instance($block_id) {
        if (isset(self::$global_instances[$block_id])) {
            return self::$global_instances[$block_id];
        } else {
            /**
             * return a fake new instance of td_block - so that we have the render() method for decoupling - when the blocks are deleted :)  @todo wtf?
             */
            return new td_block();
        }

    }


    /**
     * map all the blocks in the pagebuilder
     */
    static function wpb_map_all() {
        foreach (self::$global_instances as $block_instance) {


            //map in visual composer only classes that have get_map!
            //the mega menu block doesn't have map
            if (method_exists($block_instance, 'get_map')) {
                wpb_map($block_instance->get_map());
            }

        }
    }


    static function debug_get_all_instances() {
        return self::$global_instances;
    }
}
