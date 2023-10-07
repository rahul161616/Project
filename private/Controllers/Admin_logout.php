<?php

class Admin_logout extends Controller
{
    public function index()
    {
        session_destroy();
        redirect('Adminlogin');
    }
}
