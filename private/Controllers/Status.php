<?php

class Status extends Controller
{
    public function __construct()
    {
        echo "Status controller";
    }
    public function index($id = '') //default value for exception handling if no id is passed
    {
        echo "Status controller" . $id;
    }
}
