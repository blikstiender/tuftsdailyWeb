<?php
/*
Plugin Name: Export to InDesign - Daily Mod
Plugin URI: https://github.com/DirtySuds/Export-to-InDesign
Description: Export a post as Adobe TaggedText for import to InDesign
Author: Andrew Stephens
Author URI: http://andrewmediaprod.com/
License: GPL2
Version: 1.2.0

  Copyright 2014 Pat Hawks  (email : pat@pathawks.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//include( plugin_dir_path( __FILE__ ) . 'settings.php' );

/* Define the custom box */
add_action('admin_init', 'dirtysuds_export_html_box', 1);
add_action('single_template', 'dirtysuds_export_html');

/* Adds a box to the main column on the Post and Page edit screens */
function dirtysuds_export_html_box() {
	add_meta_box( 'dirtysuds_export_html', 'InDesign Options', 'dirtysuds_export_html_box_inner', 'post', 'side','high' );
}

/* Prints the box content */
function dirtysuds_export_html_box_inner($post, $metabox) {
?>

<div class="inside" style="margin:0;padding:6px 0">

	<a class="button" href="<?php bloginfo('url'); ?>/?p=<?php echo $post->ID; ?>&preview_id=<?php echo $post->ID; ?>&InDesign=download" style="margin-right: 10px;">Download XML</a>
	<!-- <a class="button" href="#" onClick="document.getElementById('InDesignXMLFile').style.display='block';return false;">Upload XML</a> -->

	<!-- <input type="file" name="InDesignXMLFile" id="InDesignXMLFile" style="margin-top:10px; display:none;" /> -->

</div>

<?php
}

function dirtysuds_export_html($single_template) {
	if (isSet($_GET['InDesign']) && $_GET['InDesign'] == 'download') {
		ob_end_clean();
		return dirname( __FILE__ ) .'/downloadXML.php';
	} else if (isSet($_GET['InDesign']) && $_GET['InDesign'] == 'upload') {
		ob_end_clean();
		return dirname( __FILE__ ) .'/uploadXML.php';
	} else {
		return $single_template;
	}
}
