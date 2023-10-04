<?php

class Edit extends Controller
{

    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {


// 
if(!isset($_COOKIE['edit-limit'])){
            setcookie("msg", "you cannot edit order after 2 minutes", time() + 60, "/");

    // redirect(ROOT); 
} 
// 

        echo "This is index function";
        show($_GET);

        $search_model = new Search_Model();

        // Validate and sanitize user input
        $phone = isset($_GET['phone']) ? filter_var($_GET['phone'], FILTER_SANITIZE_NUMBER_INT) : null;
        $data = [];
        if ($phone !== null) {
            // Use a prepared statement
            $query = "SELECT id FROM user_details_orders WHERE phone = :phone ORDER BY order_date DESC LIMIT 1";
            $data['rows'] =  $search_model->query($query, ['phone' => $phone]);



            $order_details = new Order_details();
            $query2 = "SELECT * from order_details where order_id = :data";
            $data['rows1'] = $order_details->query($query2, ['data' => $data['rows'][0]->id]);
        } else {
            $data['error'] = "Invalid phone number.";
        }
        $data['page_title'] = "Edit";

        $this->view('edit', $data);
        show($data);

        if (isset($_POST['update'])) {
            // Handle the update form submission
            if (count($_POST) > 0) {
                show($_POST);
                // // show($rows);
                // $checkout = new Checkout_Model();
                // $checkout->save_checkout($_POST, $rows);
                // unset($_SESSION['CART']);
                // // header("Location: " . ROOT . "Thankyou");
            }
        }
    }
}
