<?php
session_start();
$uid = $_SESSION['uid'];
$cartid = $_REQUEST['id'];
include "../DBConnection/dbconnection.php";
$qry = "UPDATE `cart` SET `status`='Delivered' WHERE `cartid`='$cartid'";
$qry2 = "UPDATE `deliveryboy` SET `status`='FREE' WHERE `delivery_id`='$uid'";
if (mysqli_query($conn, $qry) == TRUE && mysqli_query($conn, $qry2) == TRUE) {
    echo "<script>alert('Order Delivered');window.location = 'viewAssignedOrders.php';</script>";
} else {
    mysqli_error($conn);
}