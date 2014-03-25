<?php

class Error extends Controller {

    function __construct($url) {
      parent::__construct();
      echo 'This is an error:<br/>The controller "' . strtoupper($url[0]) . '" does not exist!<br/>'; 
    
      if (isset($url[1])) {
          echo 'Non-existent controller "' . strtoupper($url[0]) . '" doesn\'t have a method called "' . strtoupper($url[1]) . '"<br/>'; 
      }
            if (isset($url[2])) {
          echo 'The optional value  "' . strtoupper($url[2]) . '" is not relavent in non-existent method "' . strtoupper($url[1]) . '"'; 
      }
    }
        
}

