<?php


class Orderdate extends Controller
{
    public function index()
    {
        // TODO: Implement index method
        $data = $this->getItems();
        $this->view('Orderdate', $data);
    }
    public function getItems()
    {
        $item_info = new User_details_orders();

        $data = $item_info->findAll();
        return $data;
    }
}
