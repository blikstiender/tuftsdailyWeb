<?php 

/* Abstract class for rest requests
 * modeled slightly after WP_REST_Controller
 */

abstract class POUNCE_REST_Controller {
    protected $namespace = "pounce-json";

    public function register_routes() {
        return new WP_Error('invalid-method' , 'must be implemented in subclass', array( 'status' => 405 ));
    }
}