<?php

//main controller 
//contains function similar to all controllers as all controllers are inherited from this controller
class Controller
{

    public function __construct()
    {
        // echo "Controller";
    }
    public function view($view_name, $data = array())
    { //home view or something else (the file names)
        extract($data); //extract the array into variables
        if (file_exists("../private/Views/" . $view_name . ".view.php")) {

            require("../private/Views/" . $view_name . ".view.php");
        } else {
            require("../private/Views/404.view.php");
        }
    }



    public function load_model($model)
    { //home view or something else (the file names)
        if (file_exists("../private/Models/" . ucfirst($model) . ".php")) {
            require("../private/Models/" . ucfirst($model) . ".php");
            return $model = new $model();
        }
    }
}
