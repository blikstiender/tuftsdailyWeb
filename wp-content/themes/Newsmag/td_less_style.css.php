<?php
//this is the less compiler. It is not used in production, it is just for developers who want to use our theme with less


ob_start('ob_gzhandler');
header('Content-type: text/css');


require_once("includes/wp_booster/external/lessc.inc.php");
$less = new lessc;

//echo $less->compileFile("less_files/main.less");


$less->setPreserveComments(false);
echo $less->compileFile("includes/less_files/main.less");
