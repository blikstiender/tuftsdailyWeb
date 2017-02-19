<?php

class td_module_mega_menu extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="td_mod_mega_menu">
            <div class="td-module-image">
                <?php echo $this->get_image('td_180x135');?>
                <?php if (td_util::get_option('tds_category_module_mega_menu') == 'yes') { echo $this->get_category(); }?>
            </div>

            <div class="item-details">
                <?php echo $this->get_title(25);?>
            </div>
        </div>
        <?php return ob_get_clean();
    }







}