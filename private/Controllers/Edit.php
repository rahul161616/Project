<?php

class Edit extends Controller
{

    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        echo "This is index function";
        show($_GET);

        $search_model = new Search_Model();

        // Validate and sanitize user input
        $phone = isset($_GET['phone']) ? filter_var($_GET['phone'], FILTER_SANITIZE_NUMBER_INT) : null;

        if ($phone !== null) {
            // Use a prepared statement
            $query = "SELECT id FROM user_details_orders WHERE phone = :phone";

            $data =  $search_model->query($query, ['phone' => $phone]);


            if (is_array($data)) {
                $this->view('edit', ['rows' => $data]);
                $data['page_title'] = "Edit";
            } else {
                $this->view('edit', ['error' => "No matching data found."]);
                $data['page_title'] = "Edit";
            }
        } else {
            $this->view('edit', ['error' => "Invalid phone number."]);
            $data['page_title'] = "Edit";
        }
    }
}
