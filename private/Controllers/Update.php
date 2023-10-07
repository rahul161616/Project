<?php

class Update extends Controller
{

    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        if (isset($_POST['updates'])) {

            $this->update();
        }
        if (isset($_POST['delete'])) {

            $this->delete();
        }

        // show($rows);


        $this->view('Update');
    }
    public function update()
    {


        $update = new Order_details();
        /// get the orders id  from the form
        $id = $_POST['orders_id'];

        // get the row from orders id
        $query = "select * from `order_details` where order_id = $id";
        $res = $update->query($query, ['data' => $id]);
        // show($res);
        unset($_POST['orders_id']);
        unset($_POST['updates']);
        // show($_POST);
        foreach ($res as $row) {
    
    



            $total =  $_POST[$row->id]* $row->i_price;
        


            $data = [
                'qty' => $_POST[$row->id],
                'total' => $total
            ];


            $updates = $update->update($row->id, $data);
        }

        
    



        // show($_POST);

        // unset($_POST['updates']);


        // show($_POST);




        foreach ($_POST as $key => $value) {
            show($_POST);
            if ($key != 'updates') {
                $price =  esc($_POST['i_price' . $key]);
                $total = $value * $price;
                show("key: " . $key . ", value: " . $value . ", price: " . $price . ", total: " . $total);
                $data = [
                    'qty' => $value,
                    'total' => $total
                ];
                show("key: " . $key . " value: " . $value);


                $update->update($key, $data);
            }
        }
        // redirect(ROOT);
    }
    public function delete()
    {

        $delete = new Order_details();

        $id = $_POST['orders_id'];

        $query = "delete from `order_details` where order_id = $id";

        $delete->query($query, ['data' => $id]);


        $delete = new user_details_orders();



        $query = "delete from `user_details_orders` where id = $id";

        $delete->query($query, ['data' => $id]);
        redirect(ROOT);
    }
}
