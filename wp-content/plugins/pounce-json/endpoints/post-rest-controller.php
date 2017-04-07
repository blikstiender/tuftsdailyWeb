<?php

require_once "rest-controller.php";

define("DINING_URL", "http://menus.tufts.edu/foodpro/shortmenu.asp?naFlag=1");
define("DEWICK_DINING_FLAGS", "sName=Tufts+Dining&locationNum=11&locationName=Dewick+MacPhie+Dining+Center");
define("CARM_DINING_FLAGS", "sName=Tufts+Dining&locationNum=09&locationName=Carmichael+Dining+Center");

/* basic controller to wrap Tufts Dining's "beautiful" page in a neat JSON api
 */
class POUNCE_REST_Post_Controller extends POUNCE_REST_Controller {
    public function __construct() { 
        $this->rest_base = 'dining';
    }

    /* maps the parameters from the request to a wp_query
     */
    protected function map_params_to_query_args( $params ) {
        $query_args = array();

        if (array_key_exists("date", $params)) {
            $query_args["date"] = $params["date"];
        }
        return $query_args;
    }

    /* returns the json object for the request
     */
    public function get_items( $request ) {
        $query_args = $this->map_params_to_query_args($request->get_params());
        $date = "";
        if (array_key_exists("date", $query_args)) {
            $date = urlencode($query_args["date"]);
        }
        return array(
            array(
                "dining_hall" => "dewick",
                "meals" => $this->get_dining_hall_obj(constant("DINING_URL"). "&" . constant("DEWICK_DINING_FLAGS") . "&dtdate=" . $date)
            ), 
            array(
                "dining_hall" => "carmichael",
                "meals" => $this->get_dining_hall_obj(constant("DINING_URL"). "&" . constant("CARM_DINING_FLAGS") . "&dtdate=" . $date)
            ), 
        );
    }

    /* Get the dining hall object 
     */
    private function get_dining_hall_obj($page_url) {
        $html = file_get_contents($page_url);
        $dom = new DOMDocument;
        @$dom->loadHTML($html);
        $finder = new DomXPath($dom);

        /* hacky way to access correct menus */
        $meals_header = $finder->query("//*[contains(@class, 'shortmenumeals')]");
        $meals_content = $finder->query("//tr[contains(@height, 5)]");
        $meals_array = array();

        foreach($meals_content as $index=>$meal) {
            $menu = array(
                'items' => array()
            );

            /* eliminate all whitespace */
            $menu_value = $meal->nodeValue;
            $menu_value = preg_replace("/\s+\n/i", "\n", $menu_value);
            $menu_value = preg_replace("/^\\s+/m", '', $menu_value);
            $menu_value = explode("\n", $menu_value);
            
            $food_items = array();
            $section_name;
            foreach($menu_value as $menu_index=>$item) {
                if (ord($item) != 194 && $item != "") { /* another hacky way to eliminate white space*/
                    if (strpos($item, "--") !== false) { /* header */
                        if (!empty($food_items)) {
                            $meals_array[$index]["items"][] = array(
                                "section_name" => $section_name,
                                "food_items" => $food_items
                            );
                            $food_items = array();
                        }
                        $section_name =  preg_replace("/-- (.+) --/i", '$1', $item);
                    }  else { /* non header */
                        $food_items[] = $item;
                    }
                }
                if ($menu_index == count($menu_value) - 1) {
                    $meals_array[$index]["items"][] = array(
                        "section_name" => $section_name,
                        "food_items" => $food_items
                    );
                }
            }
            $meals_array[] = $menu;
        }

        foreach($meals_header as $index=>$meal_name) {
            $meals_array[$index]["name"] = $meal_name->nodeValue;
        }
        array_pop($meals_array);
        return $meals_array;
    }

    public function register_routes() {
        add_action( 'rest_api_init', function () {
            register_rest_route( $this->namespace, $this->rest_base,
                array(
                    'methods' => 'GET',
                    'callback' => array($this, 'get_items')
                )
            );
        });
    }
}
