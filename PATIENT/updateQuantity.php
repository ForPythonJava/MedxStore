<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../DBConnection/dbconnection.php';

$id = $_POST['id']; //cartid
$med_id = $_POST['medid']; //medid
$action = $_POST['action'];
$cart_qty = $_POST['qty'];
$stock = $_POST['stock'];
$amount = $_POST['amount'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'increase' || $action === 'decrease') {
        if ($action === 'increase') {
            $updateCartQty = $cart_qty + 1;
            $updateStockQty = $stock - 1;
        } else {
            $updateCartQty = $cart_qty - 1;
            $updateStockQty = $stock + 1;
        }

        $CartTotal = $amount * $updateCartQty;

        $qryUpdateCart = "UPDATE `cart` SET `qty`='$updateCartQty', `amount`='$CartTotal' WHERE `cartid`='$id'";
        $qryUpdateStock = "UPDATE `medicine` SET `stock`='$updateStockQty' WHERE `med_id`='$med_id'";

        if ($conn->query($qryUpdateCart) && $conn->query($qryUpdateStock)) {
            // Return a response indicating success
            $response = array(
                'updatedAmount' => $CartTotal,
                'updateCartQty' => $updateCartQty,
                'ogAmount' => $amount,
                'action' => $action,
                'updateStockQty' => $updateStockQty,
            );

            echo json_encode($response);
        }

    } else {
        // Return an error response for invalid action
        echo json_encode(array('success' => false, 'error' => 'Invalid action'));
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(array('success' => false, 'error' => 'Invalid request method'));
}


?>