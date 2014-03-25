<?php

class Bootstrap {

    function __construct() {
        if (!isset($_GET['url'])) {
            require ('controllers/index.php');
            $controller = new Index();
            return false;
        }
        
        $url = explode('/', rtrim($_GET['url'], '/'));

        $file = 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            require ('controllers/error.php');
            $controller = new Error($url);
            return false;
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->$url[1]($url[2]);
        } else
        if (isset($url[1])) {
            $controller->$url[1]();
        }
    }

}
