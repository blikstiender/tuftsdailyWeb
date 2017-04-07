<?php

require_once "rest-controller.php";

class POUNCE_REST_Dining_Controller extends POUNCE_REST_Controller {
    public function __construct() { 
        $this->rest_base = 'dining';
    }

    
}