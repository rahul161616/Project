<?php
error_reporting(E_ALL);

class Adminlogin extends Controller
{
    protected $table_name = "admin_login";
    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {

        $this->view('Adminlogin');
        $this->login_for_admin();
    }

    function input_filter($data)
    {
        $data = trim($data); //trimming the data removing extra white spaces
        $data = stripslashes($data); //stripslashes removes backslashes
        $data = htmlspecialchars($data); //htmlspecialchars converts special characters to html entities
        return $data;
    }
    public function login_for_admin()
    {
        $admin_login = new Admin_login_Model();

        if (isset($_POST['login'])) {
            $admin_name = $this->input_filter($_POST['admin_name']);
            $admin_password = $this->input_filter($_POST['admin_password']);




            // Use PDO prepared statements to prevent SQL injection
            $query = "SELECT name,password FROM $this->table_name WHERE `name` = :admin_name AND `password` = :admin_password";


            $admin_login = new Admin_login_Model();
            $result = $admin_login->query($query, [
                'admin_name' => $admin_name,
                'admin_password' => $admin_password,
            ]);

            // if ($result && count($result) == 1) {
            //     $_SESSION['name'] = $name;
            //     redirect(ROOT . '/Item_menu');
            // } else {
            //     echo "Login Failed";
            //     redirect(ROOT . '/login');
            // }
            if ($result) {
                //login successful
                $_SESSION['admin_name'] = $admin_name;
                redirect('Dashboard');
            } else {
                // Login failed, display an error message
                $_SESSION['login_error'] = "Login Failed";
                redirect(ROOT . '/login');
                // show($_POST['/Adminlogin']);
            }
        }
        // echo "Hello";
    }
}
