<?php

class Addstaffs extends Controller
{
    private $data = array();

    public function __construct()
    {
        // $this->data = $data;
    }

    public function index()
    {
        $data = $this->getItems();
        $this->view('Addstaffs', $data);
    }
    public function getItems()
    {
        $staffmodel = new Staffmodel();
        $data = $staffmodel->findAll();
        return $data;
    }
}
