<?php

class Customer_login extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        $this->view('customer_login');
    }
}
