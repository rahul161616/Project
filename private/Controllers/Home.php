<?php

class Home extends Controller
{

    public function __construct()
    {
        // echo "Home controller";
    }
    public function index()
    {
        echo "This is index function";


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
        $data =  $iteminfo->findAll();

        $this->view('home', ['rows' => $data]);

        $data =  $iteminfo->findAll();

        echo "<pre>";
        print_r($_POST);
      
    }
}
