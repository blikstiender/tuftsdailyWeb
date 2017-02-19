<?php
/*
Plugin Name: Disqus Recent Comment Widget- Advanced
Plugin URI: http://worldanimeclub.com/blog/2014/06/03/disqus-recent-comments-widget-advanced/
Description: Add a Disqus recent comments widget with advanced options, to your WordPress site.
Version: 1.5
Author: Rahul Ramesh
Author URI: http://www.worldanimeclub.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
wp_register_style( 'cssrc', plugins_url( 'drcwa/drcw.css' ) );
wp_register_style( 'cssrcs', plugins_url( 'drcwa/drcw2.css' ) );
class tp_disqusrecentcomments  extends WP_Widget
{   

    function tp_disqusrecentcomments ()
    {
        $widget_ops = array(
            'classname' => 'tp_disqusrecentcomments ',
            'description' => 'Add Disqus recent comments widget to WordPress sidebar.'
        );
        
        $this->WP_Widget('tp_disqusrecentcomments', 'Disqus Recent Comments Widget', $widget_ops);
    }
    
    function form($instance)
    {
        $instance = wp_parse_args((array) $instance);
        
        if ($instance['title'] == "") {
            $instance['title'] = "Recent Discussion";
        }
        if ($instance['commentnumberss'] == "") {
            $instance['commentnumberss'] = "10";
        }
        
        if ($instance['commentnumbers'] == "") {
            $instance['commentnumbers'] = "5";
        }

?>

<p>
<label for="<?php
        echo $this->get_field_id('title');
?>">
Widget Title:
<br/>
<input id="<?php
        echo $this->get_field_id('title');
?>" 
name="<?php
        echo $this->get_field_name('title');
?> type="text" value="<?php
        echo $instance['title'];
?>" />
</label>
</br>
<label for="<?php
        echo $this->get_field_id('siteid');
?>">
Disqus Site ID:
<br/>
<input id="<?php
        echo $this->get_field_id('siteid');
?>" 
name="<?php
        echo $this->get_field_name('siteid');
?>" type="text" value="<?php
        echo $instance['siteid'];
?>" />
</label>
<br/>

<label for="<?php
        echo $this->get_field_id('commentnumberss');
?>">
Excerpt Length:
<br/>
<input id="<?php   
        echo $this->get_field_id('commentnumberss'); 
    ?>"
        name="<?php echo $this->get_field_name('commentnumberss');?>"     
        type="number" value="<?php 
        echo $instance['commentnumberss'];?>" 
/>
</label>
</br>
<label for="<?php
        echo $this->get_field_id('commentnumbers');
?>">
Number of Comments:
<br/>
<input id="<?php
        echo $this->get_field_id('commentnumbers');
?>" 
name="<?php
        echo $this->get_field_name('commentnumbers');
?>" type="number" value="<?php
        echo $instance['commentnumbers'];
?>" />
</label>
</br>
<label for="<?php
        echo $this->get_field_id('avatarsize');
?>">
Big Avatar (94px):
<br/>
<input type="hidden" name="<?php
        echo $this->get_field_name('avatarsize');
?>" value="32" /> <input id="<?php
        echo $this->get_field_id('avatarsize');
?>" 
name="<?php
        echo $this->get_field_name('avatarsize');
?>" type="checkbox" value="92" <?php
        if (92 == $instance['avatarsize'])
            echo 'checked="checked"';
?> />
</label>
</br>
<label for="<?php
        echo $this->get_field_id('circular');
?>">
Styled Avatars:
<br/>
<input type="hidden" name="<?php
        echo $this->get_field_name('circular');
?>" value="0" /> <input id="<?php
        echo $this->get_field_id('circular');
?>" 
name="<?php
        echo $this->get_field_name('circular');
?>" type="checkbox" value="1" <?php
        if (1 == $instance['circular'])
            echo 'checked="checked"';
?> />
</label>
</br>
<label for="<?php
        echo $this->get_field_id('hideavataroption');
?>">
Hide Avatars:
<br/>
<input type="hidden" name="<?php
        echo $this->get_field_name('hideavataroption');
?>" value="0" /> <input id="<?php
        echo $this->get_field_id('hideavataroption');
?>" 
name="<?php
        echo $this->get_field_name('hideavataroption');
?>" type="checkbox" value="1" <?php
        if (1 == $instance['hideavataroption'])
            echo 'checked="checked"';
?> />
</label>
<br/>
<label for="<?php
        echo $this->get_field_id('hidemodsoption');
?>">
Hide Moderators:
<br/>
<input type="hidden" name="<?php
        echo $this->get_field_name('hidemodsoption');
?>" value="0" /> <input id="<?php
        echo $this->get_field_id('hidemodsoption');
?>" 
name="<?php
        echo $this->get_field_name('hidemodsoption');
?>" type="checkbox" value="1" <?php
        if (1 == $instance['hidemodsoption'])
            echo 'checked="checked"';
?> />
</label>
</p>

<?php
    }
    function update($new_instance, $old_instance)
    {
        $instance                     = $old_instance;
        $instance['title']            = $new_instance['title'];
        $instance['siteid']           = $new_instance['siteid'];
        $instance ['commentnumberss'] = $new_instance['commentnumberss'];
        $instance['commentnumbers']   = $new_instance['commentnumbers'];
        $instance ['avatarsize']      = $new_instance['avatarsize'];
        $instance ['circular']      = $new_instance['circular'];
        $instance['hideavataroption'] = $new_instance['hideavataroption'];
        $instance['hidemodsoption']   = $new_instance['hidemodsoption'];
                
        return $instance;
    }
    
    function widget($args, $instance) // widget sidebar output
    {
        extract($args, EXTR_SKIP);
        
        echo $before_widget;
        echo $before_title;
        $title          = $instance['title'];
        echo $title ;?>
        <?php
        echo $after_title;
        
        $siteid           = $instance['siteid'];
        $commentnumbers   = $instance['commentnumbers'];
        $hideavataroption = $instance['hideavataroption'];
        $hidemodsoption   = $instance['hidemodsoption'];
        $avatarsize       = $instance ['avatarsize'];
        $circular         = $instance ['circular'];
        $commentnumberss        = $instance ['commentnumberss'];
        if ($circular == 1 && $avatarsize == 92) {
            wp_enqueue_style('cssrc');
            }
        else if ($circular == 1 && $avatarsize == 32) {
            wp_enqueue_style('cssrcs');
            }
        echo "<div id='recentcomments' class='dsq-widget'><script type='text/javascript' src='http://$siteid.disqus.com/recent_comments_widget.js?num_items=$commentnumbers&hide_avatars=$hideavataroption&avatar_size=$avatarsize&excerpt_length=$commentnumberss&hide_mods=$hidemodsoption'></script></div>";
        echo $after_widget;
    }
}

add_action('widgets_init', create_function('', 'return register_widget("tp_disqusrecentcomments");'));

?>