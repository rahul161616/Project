<?php

class Updatestaffbyadmin extends Controller
{
    public function index()
    {
        // Default action
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action'])) {
                $action = $_POST['action'];
                if ($action === 'create') {
                    $this->add();
                } elseif ($action === 'update') {
                    $this->updates($_POST['id']);
                } elseif ($action === 'delete') {
                    $this->delete();
                } else {
                    return;
                }
            }
        }
    }


    public function add()
    {
        $staffmodel = new Staffmodel();
        // Handle product creation
        $staff_id = $_POST['staff_id'];
        $staff_name = $_POST['staff_name'];
        $staff_address = $_POST['staff_address'];
        $staff_role = $_POST['staff_role'];
        $query = "INSERT INTO staff (staff_id,staff_name,staff_address,staff_role) VALUES (:staff_id,:staff_name, :staff_address,:staff_role)";
        $data = [
            'staff_id' => $staff_id,
            'staff_name' => $staff_name,
            'staff_address' => $staff_address,
            'staff_role' => $staff_role
        ];
        $result =
            $staffmodel->write($query, $data);
        redirect('Addstaffs');
    }
    public function updates($id)
    {
        // show($_POST);
        $staffmodel = new Staffmodel();
        $data = [
            'staff_id' => $_POST['staff_id'],
            'staff_name' => $_POST['staff_name'],
            'staff_address' => $_POST['staff_address'],
            'staff_role' => $_POST['staff_role']
        ];
        // show($id);
        $updates =
            $staffmodel->update($id, $data);
        redirect('Addstaffs');
        // show($updates);
    }

    public function delete()
    {

        $delete = new Staffmodel();
        $id = $_POST['staff_id'];

        $query = "delete from `staff` where staff_id = $id";

        $delete->query($query, ['data' => $id]);
        redirect('Addstaffs');
    }
}
