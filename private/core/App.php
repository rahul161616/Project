<?php

class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct()
    {
        $URL = $this->getURL();
        if (file_exists("../private/Controllers/" . $URL[0] . ".php")) {
            $this->controller = $URL[0];
            unset($URL[0]); //remove the controller from the array letting the params remain
        }
        //if we won't find any atleast we need one to load the default controller
        require "../private/Controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        if (isset($URL[1])) {  //someone may just type home/ for it so we check if the method is set or not(we can't call a method that doesn't exist)(/Project/public/home/abc) this is the type of format if exists

            if (method_exists($this->controller, $URL[1])) {
                $this->method = ucfirst($URL[1]);  //abc may be loaded
                unset($URL[1]);
            }
        }
        $URL = array_values($URL); //reindex the array
        $this->params = $URL;
        if (!empty($URL)) {
            $this->params = $URL;
        }
        // echo "<pre>";
        // print_r($URL);
        call_user_func_array(array($this->controller, $this->method), $this->params);
    }
    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}
