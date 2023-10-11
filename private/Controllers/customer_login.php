<?php

class Customer_login extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        if (isset($_SESSION['customer_code'])) {
            redirect(ROOT . "/Item_menu");
        }

        if (isset($_POST['Customerlogin'])) {

            $this->customer_login_function();
        }
        $this->view('customer_login');
    }

    function input_filter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }                       
    public function customer_login_function()
    {

        $customer_code = $_POST['customer_code'];
        $customer_code = $this->input_filter($customer_code);
        $customer_login_mod = new Customer_login_Model();


        $query = "SELECT customer_code FROM customer_login_table WHERE `customer_code` = :customer_code";

        $data = $customer_login_mod->query($query, [
            ':customer_code' => $customer_code
        ]);



        if ($data) {

            $_SESSION['customer_code'] = $customer_code;
            redirect(ROOT . "/Item_menu");
        } else {
            $_SESSION['error'] = "Invalid Customer code is incorrect. Please try again.";
            redirect(ROOT . "/Customer_login");
        }

    }
}
