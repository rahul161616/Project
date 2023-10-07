<?php
class Checkout_Model extends Model
{
    protected $table = "user_details_orders";
    public function __construct()
    {
        echo "Checkout_Model";
    }
    public function save_checkout($POST, $rows)
    {
        // show($rows);
        // show($POST);

        $data = array();
        $data['phone'] = $POST['phone'];
        $data['full_name'] = $POST['name'];
        $data['order_date'] = date("Y-m-d H:i:s");
        $data['address'] = $POST['address'];
        $data['payment_mode'] = $POST['payment_Mode'];
        $data['table_no'] = $POST['table_n'];
        $data['total'] = $POST['total'];
        // $query = "Insert into user_details_orders (phone,full_name,order_date,address,payment_mode,table_n,total) values (:phone,:name,:order_date,:address,:payment_mode,:table_no,:total)";
        $this->insert($data);
        //save details
        $data = array();
        $data['order_id'] = 0;
        $query = "select id from user_details_orders order by id desc limit 1";
        $query2 = "select total from user_details_orders order by id desc limit 1";
        $result = $this->query($query);
        if (is_array($result)) {
            $orderid = $result[0]->id;
        }

        $result2 = $this->query($query2);
        if (is_array($result2)) {
            $total = $result2[0]->total;
        }
        $order_details = new Order_details();

        if (is_array($rows) && !empty($rows)) { // Check if $rows is an array and not empty

            foreach ($rows as $row) {
                $data  = array();
                $data['order_id'] = $orderid;
                $data['i_name'] = $row->i_name;
                $data['qty'] = $row->cart_qty;
                $data['price'] = $row->i_price;
                $data['total'] = $total;
                $data['i_temId'] = $row->i_temId;
                $query2 = "insert into order_details (order_id,i_name,qty,i_price,total,i_temId) values (:order_id,:i_name,:qty,:price,:total,:i_temId)";

                $result = $order_details->write($query2, $data);
                // set cookie edit limit for 2 minutes

            }
        } else {
            echo "No data found";
        }
        $_SESSION['user'] = $POST['phone'];
        setcookie("edit-limit", "You only can edit for 2 minutes", time() + 10, "/");
        setcookie("msg", "You only can edit for 2 minutes", time() - 3600, "/");
        // redirect(ROOT);

        // alert if coodie is not set
        // print the coodie



        //  set session for user with phone no 

    }
}
