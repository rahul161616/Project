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
}
