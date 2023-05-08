<?php

class App
{
    private $controller = "Home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        session_start();

        if (isset($_SESSION['nim'])) {
            $this->controller = "Proker";
        }

        $url = $this->parseUrl();
        if (file_exists("../mvc/controllers/$url[0].php") && isset($_SESSION['nim'])) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../mvc/controllers/$this->controller.php";
        $this->controller = new $this->controller();

        if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = explode('/', $url);
            return $url;
        }
    }
}
