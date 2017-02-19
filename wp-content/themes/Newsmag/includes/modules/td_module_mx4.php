<?php
class td_module_mx4 extends td_module {
    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope() ?>>
            <div class="td-module-image">
                <?php echo $this->get_image('td_300x194'); ?>
                <?php if (td_util::get_option('tds_category_module_mx4') == 'yes') { echo $this->get_category(); }?>
            </div>

            <?php echo $this->get_title(12); ?>

            <div class="meta-info">
                <?php //echo $this->get_author();?>
                <?php //echo $this->get_date();?>
                <?php //echo $this->get_comments();?>
            </div>

            <?php if(empty(td_global::$is_wordpress_loop)){echo $this->get_quotes_on_blocks();}?>

            <?php echo $this->get_item_scope_meta(); ?>

        </div>

        <?php
        return ob_get_clean();
    }
}