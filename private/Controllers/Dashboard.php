<?php
class Dashboard extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        if (!isset($_SESSION['admin_name'])) {
            redirect('Adminlogin');
        } else {
            $this->view('dashboard');
        }
    }
}
