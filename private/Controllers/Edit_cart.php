<?php
class Edit_cart extends Controller
{
    private $redirect_to = "";

    public function __construct()
    {
        // Constructor code if needed
    }

    public function index($id = '')
    {
        // Similar logic as in Add_to_cart.php index() method
    }

    // public function edit_item($id)
    // {
    //     // Ensure $id is valid (e.g., numeric) and sanitize it
    //     $id = filter_var($id, FILTER_VALIDATE_INT);

    //     if ($id === false || $id <= 0) {
    //         // Invalid $id, handle the error (e.g., redirect to an error page)
    //         // You can also show an error message to the user
    //         echo "Invalid item ID.";
    //         return;
    //     }

    //     // Fetch item details from the database based on $id
    //     $order_details = new Order_details(); // Replace with your actual model class
    //     $item = $order_details->where('order_id', $id); // Replace with your method for fetching an item by ID

    //     if (!$item) {
    //         // Item not found in the database, handle the error
    //         echo "Item not found.";
    //         return;
    //     }

    //     // Check if the form is submitted for updating the item
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         // Handle the form submission to update the item in the database
    //         $newQuantity = $_POST['new_quantity']; // Replace with the actual form field name
    //         // Perform the update operation using your model method
    //         $updated = $itemModel->updateItemQuantity($id, $newQuantity); // Replace with your update method

    //         if ($updated) {
    //             // Item updated successfully, you can redirect to a success page or display a success message
    //             echo "Item updated successfully.";
    //             return;
    //         } else {
    //             // Error occurred during the update, handle the error
    //             echo "Error updating item.";
    //             return;
    //         }
    //     }
    //     // Check if the form is submitted for updating the item
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Handle the form submission to update the item in the database
    //         $qty = $_POST['new_quantity']; // Replace with the actual form field name
    //         // Perform the update operation using your model method
    //         $updated = $order_details->updateItemQuantity($id, $qty); // Replace with your update method
    //         if ($updated) {
    //             // Item updated successfully, you can redirect to a success page or display a success message
    //             echo "Item updated successfully.";
    //             return;
    //         } else {
    //             // Error occurred during the update, handle the error
    //             echo "Error updating item.";
    //             return;
    //         }
    //     }

    //     // Display the edit form
    //     $data = [
    //         'item' => $item
    //     ];
    //     $this->view('edit_cart/edit_item', $data); // Load the edit item view and pass item data
    // }


    public function update_quantity()
    {
        $order_details = new Order_details(); // Replace with your actual model class
        $order_id = $_GET['order_id'];
        $i_temId = $_GET['i_temId'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            show($_POST);
            // Retrieve the quantities from the POST data
            $quantities = $_POST['quantity'];

            // Loop through the quantities and update items in the database
            foreach ($quantities as $itemId => $newQuantity) {
                // Sanitize and validate the input if necessary
                $itemId = filter_var($itemId, FILTER_VALIDATE_INT);
                $newQuantity = filter_var($newQuantity, FILTER_VALIDATE_INT);

                if ($itemId !== false && $newQuantity !== false && $newQuantity >= 0) {
                    // Update the item's quantity in the database using your model method
                    // Replace 'updateItemQuantity' with your actual method for updating quantity
                    $updated = $order_details->query("Update order_details set qty = :newQuantity where order_id = :order_id AND i_temId = :itemId", ['newQuantity' => $newQuantity, 'order_id' => $order_id, 'itemId' => $i_temId]);

                    if (!$updated) {
                        // Handle the case where an item's quantity could not be updated
                        echo "Error updating item with ID: " . $itemId;
                        return;
                    }
                }
            }

            // Redirect the user to a success page or wherever is appropriate
            header("Location: " . ROOT . "/edit_cart/success");
            exit;
        } else {
            // Handle the case where the form was not submitted via POST
            echo "Invalid request.";
            return;
        }
    }
    private function redirect()
    {
        // Similar logic as in Add_to_cart.php redirect() method
    }

    private function set_redirect()
    {
        // Similar logic as in Add_to_cart.php set_redirect() method
    }
}
