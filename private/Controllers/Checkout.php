<?php

class Checkout extends Controller
{
    protected $table = "iteminfo";
    public function __construct()
    {
        echo "Status controller";
    }
    public function index($id = '') //default value for exception handling if no id is passed
    {
        echo "Status controller" . $id;
        $iteminfo = new ItemInfoModel();
        $rows = false;
        $prod_ids = array();


        if (isset($_SESSION['CART'])) {

            $prod_ids = array_column($_SESSION['CART'], "id");
            $ids_str = "'" . implode("','", $prod_ids) . "'"; //array to string 


            $rows =  $iteminfo->query("select * from $this->table where id in ($ids_str)");
        }
        // show($rows);
        // // show($prod_ids);
        // // show($_SESSION['CART']);
        if (is_array($rows)) {
            foreach ($rows as $key => $row) {
                foreach ($_SESSION['CART'] as $item) {
                    if ($row->id == $item['id']) {
                        $rows[$key]->cart_qty = $item['qty'];
                        break;
                    }
                }
            }
        }
        $data['page_title'] = "Checkout";
        $data['sub_total'] = 0;
        if ($rows) {
            foreach ($rows as $key => $row) {
                $mytotal = $row->i_price * $row->cart_qty;
                $data['sub_total'] += $mytotal;
            }
        }

        $data['rows'] = $rows;
        // show($rows);
        $this->view("checkout", $data);
    }
}
