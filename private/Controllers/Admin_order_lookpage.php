<?php

class Admin_order_lookpage extends Controller
{
    public function index()
    {
        // // Load the view with data
        // $data = [
        //     'orders' => Order::findAll(),
        // ];
        // return view('admin/order_lookpage', $data);
        // require_once "connectionfordash.php";
        $data = array();
        $data = $this->getValuefromuser();
        $this->view('admin_order_lookpage', $data);
    }
    // public function getValuefromuser()
    // {
    //     $user_details_orders = new User_details_orders();
    //     $orders = $user_details_orders->findAll();
    //     // $this->view('admin_order_lookpage', $orders);
    //     return $orders;
    // }
    // public function getValuefromorder()
    // {
    //     $orders_details = new Order_details();
    //     $orders = $orders_details->findAll();
    //     $order_query = "SELECT * FROM `user_orders` WHERE `order_id` = '$orders_id'";
    //     // $this->view('admin_order_lookpage', $orders);
    //     return $orders;
    // }
    public function getValuefromuser()
    {
        $user_details_orders = new User_details_orders();
        $user_details = $user_details_orders->findAll();

        // Assuming you want to fetch orders for a specific user's order_id
        // You may need to modify this logic to select a specific user's order_id
        $order_id = ''; // Set the order_id based on your logic

        $orders_details = new Order_details();
        $user_orders = $orders_details->findAll(); // Modify this method to match your logic

        return [
            "row" => $user_details,
            "row1" => $user_orders
        ];
    }
}
