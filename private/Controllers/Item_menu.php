<?php

class Item_menu extends Controller
{

    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
 
      $getItems = $this->getItems();
        $data=[
            "items"=> $getItems,
            "test"=> "test value" //to sent multiple values in views
        
        ];

        $this->view('item_menu', $data);

        echo "<pre>";
        print_r($_POST);
    }

    public function getItems(){
        $iteminfo = new ItemInfoModel();
        // $iteminfo = $this->load_model('ItemInfoModel');
        // $arr['id'] = 7; //mistake at this point primary key cannot be duplicated
        // $arr['i_name'] = "Momo23";
        // $arr['i_price'] = 1230;
        // $arr['i_img'] = "/Assets/momo.jpeg";
        // $arr['i_alt'] = "Momo23";
        // $arr['i_content'] = "Pick 23";
        // $arr['i_temId'] = 3;
        // $data = $iteminfo->where('i_name', 'Momo');
        // $iteminfo->insert($arr);
        // $iteminfo->update(7, $arr); //update($id,$data);
        // $iteminfo->delete(7);
        // $data =  $iteminfo->findAll(); 

        // $data =  $iteminfo->findAll();

      

        $data =  $iteminfo->findAll();
        return $data;
    }
}
