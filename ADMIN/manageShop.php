<?php
session_start();
include('../DBConnection/dbconnection.php');

$email = $_GET['id'];
$status = $_GET['status'];
if ($status == "Delete") {
    $qry = "DELETE FROM `login` WHERE `email`='$email'";
    $qry1 = "DELETE FROM `shop` WHERE `email`='$email'";
    $result = mysqli_query($conn, $qry);
    $result1 = mysqli_query($conn, $qry1);
} else {
    $qry = "UPDATE `login` SET `status`='$status' WHERE `email`='$email'";
    $result = mysqli_query($conn, $qry);
}
$result = mysqli_query($conn, $qry);
echo $result;
if ($result) {
    if ($status == "Approved") {
        echo "<script type=\"text/javascript\"> alert(\"Shop Approved\");
    window.location=(\"adminViewShops.php\");
    </script>";
    } else if ($status == "Delete") {
        echo "<script type=\"text/javascript\"> alert(\"Shop Deleted\");
    window.location=(\"adminViewShops.php\");
    </script>";
    } else {
        echo "<script type=\"text/javascript\"> alert(\"Rejected\");
    window.location=(\"adminViewShops.php\");
    </script>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>