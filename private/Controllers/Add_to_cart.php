

<?php

class Add_to_cart extends Controller
{
    private $redirect_to = "";
    protected $table = "iteminfo";
    public function __construct()
    {
        // echo "Home controller";
    }

    public function index($id = '')
    {
        $this->set_redirect();
        echo "This is index function";
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');

        $iteminfo = new ItemInfoModel();

        $datas =  $iteminfo->query("select * from $this->table where id = :id", ["id" => $id]);


        if ($datas) {
            $data = $datas[0];
            if (isset($_SESSION['CART'])) {
                $ids = array_column($_SESSION['CART'], "id");
                if (in_array($data->id, $ids)) {
                    $key = array_search($data->id, $ids); //tels at what key is found the one we are searching for
                    $_SESSION['CART'][$key]['qty']++;
                } else {
                    $arr = array();
                    $arr['id'] = $data->id;
                    $arr['qty'] = 1;

                    $_SESSION['CART'][] = $arr;
                }
            } else {
                $arr = array();
                $arr['id'] = $data->id;
                $arr['qty'] = 1;

                $_SESSION['CART'][] = $arr;
            }
        }
        show($_SESSION);
        // unset($_SESSION['CART']);
        $this->redirect();
    }
    public function add_quantity($id = '')
    {
        $this->set_redirect();
        
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                if ($item['id'] == $id) {
                    $_SESSION['CART'][$key]['qty'] += 1;
                    break;
                }
            }
        }
        $this->redirect();
    }
    public function subtract_quantity($id = '')
    {
        $this->set_redirect();
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                if ($item['id'] == $id) {
                    $_SESSION['CART'][$key]['qty'] -= 1;
                    break;
                }
            }
        }
        $this->redirect();
    }
    public function remove($id = '')
    {
        $this->set_redirect();
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                if ($item['id'] == $id) {
                    unset($_SESSION['CART'][$key]);
                    $_SESSION['CART'] = array_values($_SESSION['CART']);
                    break;
                }
            }
        }
        $this->redirect();
    }
    private function redirect()
    {
        show($this->redirect_to);
        header("Location: " . $this->redirect_to);
        die;
    }
    private function set_redirect()
    {
        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "") {
            $this->redirect_to = $_SERVER['HTTP_REFERER'];
        } else {
            $this->redirect_to = ROOT . "Home";
        }
    }
}
