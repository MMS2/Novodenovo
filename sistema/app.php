<?php

class App {

    private $controller = BASEURLAPP;
    private $method = "index";
    private $params = array();

    public function __construct() {

        $url = $this->parseUrl();
//	print_r($url);
        if (file_exists('app/controler/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }


        if (isset($url[0])) {

            require_once 'app/erro/404.php';
        } else {

            require_once 'app/controler/' . $this->controller . '.php';
            $this->controller = new $this->controller;
        }

        if (isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {

                die(require_once 'app/erro/404.php');
            }
        } else {
            
        }


        $this->params = $url ? array_values($url) : array();
        call_user_func_array(array($this->controller, $this->method), $this->params);
//print_r($this->params);
    }

    public function parseUrl() {

        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            
        }
    }

}

?>