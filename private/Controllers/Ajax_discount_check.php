<?php
class Ajax_discount_check extends Controller
{
    public function __construct()
    {
        // echo "Home controller";
    }

    public function index()
    {
        $data_type = $_POST['data_type'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $user_details_orders = new User_details_orders();

        $data2 = $user_details_orders->query("SELECT phone from user_details_orders");
        // show($data2);
        $phoneCount = [];

        foreach ($data2 as $row) {
            $dbPhone = $row->phone;

            // Check if the phone number is already in the array, and increment its count
            if (array_key_exists($dbPhone, $phoneCount)) {
                $phoneCount[$dbPhone]++;
            } else {
                // If not, initialize its count to 1
                $phoneCount[$dbPhone] = 1;
            }
        }
        // You should perform your discount check logic here
        // Initialize the discount to 0
        $discount = 0;
        if (array_key_exists($phone, $phoneCount)) {
            $count = $phoneCount[$phone];

            // Check if repetitions are more than 5 for a 10% discount
            if ($count > 2) {
                $discount = 10; // Set the discount to 10%
            }
        }
        // Create a response array with data_type and discount
        $response = ['data_type' => $data_type, 'discount' => $discount];
        echo json_encode($response);
        
    }
    
}
