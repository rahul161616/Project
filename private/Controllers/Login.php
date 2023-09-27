<?php

class Login extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        $this->view('Login');
    }
}
