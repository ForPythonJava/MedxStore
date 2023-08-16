<?php
session_start();
include "../DBConnection/dbConnection.php";
$med_id = $_GET['id']; //med-id
$sid = $_GET['sid']; //shopid
$amount = $_GET['amount'];
$stock = $_GET['stock'];
$finalStock = $stock - 1;
$uid = $_SESSION['uid']; //session
$curr_date = date('Y-m-d'); //current date

$qryCheck = "SELECT COUNT(*) AS cnt FROM `cart` WHERE `med_id`='$med_id' AND `reg_id`='$uid' AND `status`='incart'";
$qryOut = $conn->query($qryCheck); // Use $qryCheck instead of $qry
$fetchData = mysqli_fetch_array($qryOut);

if ($fetchData['cnt'] > 0) {
    echo "<script>alert('Item already exists in cart');
    window.location.href = 'patientViewMedicines.php?id=$sid';</script>";
} else {
    $qry = "INSERT INTO `cart`(`reg_id`,`med_id`,`amount`,`order_date`)VALUES('$uid','$med_id','$amount','$curr_date')";
    // echo $qry;

    $qryUpdate = "UPDATE `medicine` SET `stock`='$finalStock' WHERE `med_id`='$med_id'";

    if ($conn->query($qry) && $conn->query($qryUpdate)) {
        echo "<script>alert('Added to Cart');
    window.location.href = 'patientViewMedicines.php?id=$sid';</script>";
    }

}