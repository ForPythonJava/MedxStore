<?php
include '../DBConnection/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $cartId = $_POST['id'];


        // Perform the deletion operation
        $deleteCartItem = "DELETE FROM `cart` WHERE `cartid`='$cartId'";
        if ($conn->query($deleteCartItem)) {
            // Deletion successful
            echo json_encode(array('status' => 'success', 'message' => 'Item deleted successfully'));
        } else {
            // Error during deletion
            echo json_encode(array('status' => 'error', 'message' => 'Failed to delete item'));
        }
    } else {
        // No 'id' parameter provided
        echo json_encode(array('status' => 'error', 'message' => 'Missing parameter'));
    }
} else {
    // Invalid request method
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>