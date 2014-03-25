<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        echo 'We are inside index<br/>';
    }
    
    public function __call($method, $param) {
    echo 'The method "' . strtoupper($method) . '" does not exist in controller "INDEX"<br/>';
    echo 'Optional value "' . $param[0] . '" is not relavent since there is no method "'. strtoupper($method) . '"';
    } 
}