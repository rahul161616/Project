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

        // $iteminfo = $this->load_model('ItemInfoModel');
        $iteminfo = new ItemInfoModel();
        $arr['id'] = 7; //mistake at this point primary key cannot be duplicated
        $arr['i_name'] = "Momo22";
        $arr['i_price'] = 120;
        $arr['i_img'] = "/Assets/momo.jpeg";
        $arr['i_alt'] = "Momo22";
        $arr['i_content'] = "Pick 1";
        $arr['i_temId'] = 1;
        $data =  $iteminfo->findAll();
        // $data = $iteminfo->where('i_name', 'Momo');
        $this->view('home', ['rows' => $data]);
        $iteminfo->insert($arr);
        $data =  $iteminfo->findAll();
        // $iteminfo->update($id,$data);
        // $iteminfo->delete($id);
    }
}
