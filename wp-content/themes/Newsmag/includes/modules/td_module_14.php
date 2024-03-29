<?php

class td_module_14 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="meta-info-container">
                <?php echo $this->get_image('td_681x0');?>
                <div class="meta-info">
                    <?php echo $this->get_title(30);?>
                    <?php if (td_util::get_option('tds_category_module_14') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date();?>
                    <?php echo $this->get_comments();?>
                </div>
            </div>

            <div class="td-excerpt">
                <?php echo $this->get_excerpt(40);?>
            </div>

            <?php echo $this->get_item_scope_meta();?>
        </div>

        <?php return ob_get_clean();
    }
}