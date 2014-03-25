<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        echo 'We are inside controller help<br/>';
    }

    public function other($arg = false) {
        echo 'We are inside method other<br/>';
        if ($arg) {
            echo 'Optional: ' . $arg . '<br/>';
        }
    }    
    public function __call($method, $param) {
        echo 'The method "' . strtoupper($method) . '" does not exist in controller "HELP"<br/>';
        if (isset($param[0])) {
            echo 'Optional value "' . $param[0] . '" is not relavent since there is no method "'. strtoupper($method) . '"';
        }
    }    
    
}
