<?php
class Updateordersbyadmin extends Controller
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
                    $this->updates($_POST['i_temId']);
                } elseif ($action === 'delete') {
                    $this->delete();
                } else {
                    return;
                }
            }
        }
    }

    function uploadImage()
    {
        // Check if a file was uploaded

        if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
            $uploadedFile = $_FILES['product_image'];

            // Get the file name and extension
            $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);

            // Generate a unique file name to prevent overwriting
            $uniqueFileName = uniqid('product_image_') . '.' . $fileExtension;

            // Move the uploaded file to the current directory
            if (move_uploaded_file($uploadedFile['tmp_name'], $uniqueFileName)) {
                // Return the URL of the uploaded image (assuming it's in the same directory as the script)
                return $uniqueFileName;
            }
        }
        // If no file was uploaded or there was an error, return an empty string
        return '';
    }
    public function add()
    {
        $item_info = new ItemInfoModel();
        // Handle product creation
        $i_name = $_POST['i_name'];
        $i_price = $_POST['i_price'];
        $i_img = $this->uploadImage(); // Handle image upload and get the image URL
        $i_content = $_POST['i_content']; // Handle image upload and get the image URL
        $i_alt = $_POST['i_alt']; // Handle image upload and get the image URL
        $i_temId = $_POST['i_temId'];
        $query = "INSERT INTO iteminfo (i_name, i_price, i_img,i_alt,i_content,i_temId) VALUES (:i_name, :i_price,:i_img,:i_alt,:i_content,:i_temId)";
        $data = [
            'i_name' => $i_name,
            'i_price' => $i_price,
            'i_img' => $i_img,
            'i_alt' => $i_alt,
            'i_content' => $i_content,
            'i_temId' => $i_temId,
        ];
        $result = $item_info->write($query, $data);
        redirect('Additemsadmin');
    }
    public function updates($id)
    {
        $itemInfo = new ItemInfoModel();
        $data = [
            'i_name' => $_POST['i_name'],
            'i_price' => $_POST['i_price'],
            'i_img' =>  $this->uploadImage(), // Handle image upload and get the image URL
            'i_alt' => $_POST['i_content'], // Handle image upload and get the image URL
            'i_content' => $_POST['i_alt'], // Handle image upload and get the image URL
            'i_temId' => $_POST['i_temId']
        ];


        $updates = $itemInfo->update($id, $data);
        redirect('Additemsadmin');
    }

    public function delete()
    {

        $delete = new ItemInfoModel();
        $id = $_POST['i_temId'];

        $query = "delete from `iteminfo` where i_temId = $id";

        $delete->query($query, ['data' => $id]);
        redirect('Additemsadmin');
    }
}
