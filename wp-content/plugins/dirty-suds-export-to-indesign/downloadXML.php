<?php

// We don't want any optimization plugins mistaking our output for HTML. Let's turn them off.
ob_end_clean();
the_post();
global $post;

$string = "<thetuftsdaily></thetuftsdaily>";

$xml = simplexml_load_string($string);

// TODO Handle Headline for Opinion Differently
// Cat = 24

$xml->addChild("headline", $post->post_title);

$xml->addChild("body", wp_strip_all_tags($post->post_content));

preg_match_all("'<blockquote>(.*?)</blockquote>'si", $post->post_content, $matches);

foreach($matches[1] as $quote) {
	$xml->addChild("pullquote", $quote);
}

// TODO Support Multiple Authors
$author = $xml->addChild("author");

$author_data = get_userdata($post->post_author);

$author->addChild("byline", "by ".$author_data->display_name);

if (strpos(strtoupper($author_data->description), "STAFF WRITER")) {
	$rank = "Staff Writer";
} else if (strpos(strtoupper($author_data->description), "CONTRIBUTING WRITER")) {
	$rank = "Contributing Writer";
} else if (strpos(strtoupper($author_data->description), "EDITOR")) {
	$rank = "Daily Editorial Board";
} else {
	$rank = "INSERT RANK HERE";
}
$author->addChild("rank", $rank);

// TODO Add Bio Only If Opinion
$xml->addChild("bio", $author_data->description);

$xml->addChild("jump", "see ".strtoupper(get_editorial_metadata('jumpword', 'text')).", page xx");
$xml->addChild("conthead", get_editorial_metadata('cont-head', 'text'));
$xml->addChild("subtitle", get_editorial_metadata('subtitle', 'text'));

$cont = $xml->addChild("continuation");
$cont->addChild("contjump", get_editorial_metadata('jumpword', 'text'));
$cont->addChild("contpage", "continued from page xx");

// Get Photo Caption for Featured Image
$thumbnail_id    = get_post_thumbnail_id($post->ID);
$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
if ($thumbnail_image && isset($thumbnail_image[0])) {
    $photo = $xml->addChild("photo");
    $photo->addChild("photocaption", $thumbnail_image[0]->post_content);
    $photo->addChild("photocredit", $thumbnail_image[0]->post_excerpt);
}

$thumbName = '';
$sectionName = '';
foreach(wp_get_post_categories($post->ID) as $catId) {
	$cat = get_category($catId);
	
	// If Child
	if ($cat->category_parent != 0) {
		$thumbName = $cat->cat_name;
		$sectionName = get_ancestor_cat_name($catId);
	}
}

$xml->addChild("thumbnail", $thumbName);

if (!$sectionName) {
	$sectionName = "daily";
}

// We don't want the browser to render the file, only download it. Let's call it a binary file
header('Content-type: binary/text; charset=utf-8');

// We need to give the file some sort of name. In this case, the author's last name and the title of the story
// Don't forget to strip the spaces out. This makes it more compatible cross browser
$filename = $sectionName.'-'.$post->ID.'.xml';

header('Content-Disposition: filename='.$filename);

echo $xml->asXML();

exit();

function get_editorial_metadata($slug, $type) {
    global $post, $edit_flow;

    $postmeta_key = "_ef_editorial_meta_{$type}_$slug";

    $view = get_metadata( 'post', $post->ID, '', true );
    $show_editorial_metadata = $view["{$postmeta_key}"][0];

    if ($type == "date") { $show_editorial_metadata = date("F j, Y", $show_editorial_metadata); }

    return $show_editorial_metadata;
}

function get_ancestor_cat_name($id) {
	$cat = get_category($id);
	if ($cat->category_parent == 0) {
		return $cat->slug;
	} else {
		return get_ancestor_cat_name($cat->category_parent);
	}
}
