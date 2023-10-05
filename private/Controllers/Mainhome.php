<?php

class Mainhome extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        $this->view('Mainhome');
    }
}
