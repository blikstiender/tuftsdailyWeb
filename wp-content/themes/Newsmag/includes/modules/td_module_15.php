<?php

class td_module_15 extends td_module_single {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes(); ?> <?php echo join(' ', get_post_class());?> td-post-content" <?php echo $this->get_item_scope();?>>
            <div class="item-details">
                <?php echo $this->get_title(30);?>
                <div class="meta-info">
	                <?php if (td_util::get_option('tds_category_module_15') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date();?>
                    <?php echo $this->get_comments();?>
                </div>

                <?php echo $this->get_image('td_640x0');?>

	            <div class="td-post-text-content">
		            <?php echo $this->get_content();?>
	            </div>
            </div>

            <?php echo $this->get_item_scope_meta();?>
        </div>

        <?php return ob_get_clean();
    }
}

?>