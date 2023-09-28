<?php
require "Config.php";
require "Database.php";
require "functions.php";
require "Controller.php";
require "Model.php";
require "App.php";

spl_autoload_register(function ($class_name) {

    require  "../private/Models/" .  ucfirst($class_name) . ".php";
});
