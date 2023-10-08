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
                    $this->updates($_POST['id']);
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
        if (isset($_FILES['i_img']) && $_FILES['i_img']['error'] === UPLOAD_ERR_OK) {
            $uploadedFile = $_FILES['i_img'];
            $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
            $uniqueFileName = uniqid('i_img_') . '.' . $fileExtension;
            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/Project/public/Assets/' . $uniqueFileName; // Full path to your project's public/Assets folder
            if (move_uploaded_file($uploadedFile['tmp_name'], $uploadDirectory)) {
                // Return the URL to the uploaded image
                return $uniqueFileName;
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "No file uploaded or an error occurred during upload.";
        }
    }

    public function add()
    {
        $item_info = new ItemInfoModel();
        // Handle product creation
        $i_name = $_POST['i_name'];
        $i_price = $_POST['i_price'];
        $i_img = $this->uploadImage(); // Get the image URL from uploadImage()
        $i_content = $_POST['i_content'];
        $i_alt = $_POST['i_alt'];
        $i_temId = $_POST['i_temId'];
        $query = "INSERT INTO iteminfo (i_name, i_price, i_img, i_alt, i_content, i_temId) VALUES (:i_name, :i_price, :i_img, :i_alt, :i_content, :i_temId)";
        $data = [
            'i_name' => $i_name,
            'i_price' => $i_price,
            'i_img' => $i_img, // Use the returned image URL
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
            'i_img' => $this->uploadImage(), // Get the image URL from uploadImage()
            'i_alt' => $_POST['i_alt'],
            'i_content' => $_POST['i_content'],
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
