<?php
   /*
   Plugin Name: Pounce-Json
   Plugin URI: -
   Description: -
   Version: -
   Author: -
   License: -
   */

require "endpoints/post-rest-controller.php";
require "endpoints/dining-rest-controller.php";

$post_controller = new POUNCE_REST_Post_Controller;
$post_controller->register_routes();

$dining_controller = new POUNCE_REST_Dining_Controller;
$dining_controller->register_routes();