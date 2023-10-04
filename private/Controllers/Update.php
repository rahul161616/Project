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
    public function update(){
     
            $update = new Order_details();
            show($_POST);
            
            unset($_POST['updates']);
            
            
            show($_POST);
            
            
            

        foreach ($_POST as $key => $value) {
            if ($key !== 'updates') {
                $data = [
                    'qty' => $value,
                ];
                show("key: " . $key . " value: " . $value);
             
                
                $update->update($key, $data);
            }
        }
            redirect(ROOT);

            
        
    }
    public function delete()
    {

        $delete = new Order_details();
   
        $id =$_POST['orders_id'];
      
        $query= "delete from `order_details` where order_id = $id";

       $delete->query($query, ['data' => $id]);

       
       $delete = new user_details_orders();
  
      
   
       $query= "delete from `user_details_orders` where id = $id";

      $delete->query($query, ['data' => $id]);

      











        
        redirect(ROOT);
    }
}
