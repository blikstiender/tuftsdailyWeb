<?php

class td_module_mx1 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-block14-border"></div>
            <?php echo $this->get_image('td_341x220');?>

            <div class="meta-info">
                <?php echo $this->get_title(25);?>
                <div class="td-editor-date">
                    <?php if (td_util::get_option('tds_category_module_mx1') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date();?>
                </div>
            </div>

            <?php echo $this->get_item_scope_meta();?>
        </div>

        <?php return ob_get_clean();
    }
}