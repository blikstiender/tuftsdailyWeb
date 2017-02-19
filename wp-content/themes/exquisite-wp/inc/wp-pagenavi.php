<?php
function theme_pagination($pages = '', $range = 1, $category = false)
{  
	$showitems = ($range * 2)+1;
	
	global $paged;
	
	if(get_query_var('paged')) {
	     $paged = get_query_var('paged');
	} elseif(get_query_var('page')) {
	     $paged = get_query_var('page');
	} else {
	     $paged = 1;
	}
	
	if($pages == '')
	{
	   global $wp_query;
	   $pages = $wp_query->max_num_pages;
	   if(!$pages)
	   {
	       $pages = 1;
	   }
	}   

	if(1 != $pages)
	{
	   echo '<aside class="pagenavi row"><ul class="six mobile-two columns">';
	
	
	   if($paged > 1 && $showitems < $pages) echo '<li class="arrow"><a href="'.get_pagenum_link($paged - 1).'"><i class="fa fa-angle-left"></i></a></li>';
	
	   for ($i=1; $i <= $pages; $i++)
	   {
	       if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	       {
	           echo ($paged == $i)? "<li class='disabled'><a>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
	       }
	   }
	
	   if ($paged < $pages && $showitems < $pages) echo '<li class="arrow"><a href="'.get_pagenum_link($paged + 1).'"><i class="fa fa-angle-right"></i></a></li>';  
	   echo '</ul><div class="six mobile-two columns"><span class="pages">'.$paged.' '. __("OF", THB_THEME_NAME) .' '.$pages.'</span></div></aside>';
	}
	
	if(1==2){paginate_links(); posts_nav_link(); next_posts_link(); previous_posts_link();}
}
?>