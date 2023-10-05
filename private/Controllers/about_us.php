<?php

class about_us extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        $this->view('about_us');
    }
}
