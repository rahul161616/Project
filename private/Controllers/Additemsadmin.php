<?php
class Additemsadmin extends Controller
{

    public function index()
    {
        // Controller logic goes here
        $data  = $this->getItems();
        $this->view('Additemsadmin', $data);
    }
    public function getItems()
    {
        $itemmodel = new ItemInfoModel();
        $data = $itemmodel->findAll();
        return $data;
    }
}
