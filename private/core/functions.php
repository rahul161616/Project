<?php

function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function check_error()
{
    if (isset($_SESSION['ERROR']) &&  $_SESSION['ERROR'] != "") {
        echo  $_SESSION['ERROR'];
        unset($_SESSION['ERROR']);
    }
}
function esc($data)
{
    return addslashes($data);
}
