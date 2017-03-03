<?php
   /*
   Plugin Name: Pounce-Json
   Plugin URI: -
   Description: -
   Version: -
   Author: -
   License: -
   */
?>


<?php


function entrypoint () {
    return "it's working! ";
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'pounce-json', '/(.*)', array(
        'methods' => 'GET',
        'callback' => 'entrypoint',
    ) );
} );

?>