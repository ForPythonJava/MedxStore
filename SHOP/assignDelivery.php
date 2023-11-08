<?php
$cartid = $_REQUEST['id'];
$did = $_REQUEST['dbId'];
include "../DBConnection/dbconnection.php";
$qry = "UPDATE `cart` SET `status`='Assigned',`delivery_id`='$did' WHERE `cartid`='$cartid'";
$qry2 = "UPDATE `deliveryboy` SET `status`='BUSY' WHERE `delivery_id`='$did'";
if (mysqli_query($conn, $qry) == TRUE && mysqli_query($conn, $qry2) == TRUE) {
    echo "<script>alert('Order Assigned');window.location = 'shopViewOrders.php';</script>";
} else {
    mysqli_error($conn);
}
