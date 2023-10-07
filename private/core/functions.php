<?php

function show($data)
{
    // echo "<hr>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    // echo "<hr>";
}
function check_error()
{
    if (isset($_SESSION['ERROR']) &&  $_SESSION['ERROR'] != "") {
        echo  $_SESSION['ERROR'];
        unset($_SESSION['ERROR']);
    }
}

function redirect($value)
{
    header("Location: " . $value);
    die;

}
function esc($data)
{
    return addslashes($data);
}

 
