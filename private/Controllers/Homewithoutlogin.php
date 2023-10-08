<?php

class Homewithoutlogin extends Controller
{
    public function index()
    {
        // TODO: Add logic here
        $data = $this->getItems();
        $this->view('Homewithoutlogin', $data);
    }
    public function getItems()
    {
        $itemmodel = new ItemInfoModel();
        $data = $itemmodel->findAll();
        return $data;
    }
}
