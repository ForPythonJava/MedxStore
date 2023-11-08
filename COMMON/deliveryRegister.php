<?php
session_start();
include 'commonHeader.php';
include '../DBConnection/dbconnection.php';
?>

<!-- slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-title ">
                    <h2 class="title">Delivery Boy</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Delivery Boy
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- slider end -->

<!-- contact-form -->
<div class="contact-form-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-image">
                    <img src="../assets/images/contact-big1.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <div class="heading-part">
                        <p>NEW HERE ?</p>
                        <h2>Sign Up Now</h2>
                    </div>
                    <form class="form-details" method="post">
                        <input type="text" placeholder="Name" class="form-control-text" required pattern="[a-z A-Z]+" name="name">
                        <input type="email" placeholder="E-mail" class="form-control-text" required name="email">
                        <input type="text" placeholder="Phone" class="form-control-text" pattern="[6789][0-9]{9}" maxlength="10" minlength="10" required name="phone">
                        <input type="password" placeholder="Password" class="form-control-text" required name="password">
                        <textarea placeholder="Address" class="form-control-textarea" name="address" required></textarea>
                        <button type="submit" class="btn btn-Shop Message" name="deliveryReg">SignUp
                            <i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-form end -->


<?php
if (isset($_REQUEST['deliveryReg'])) {
    $Name = $_REQUEST['name'];
    $Email = $_REQUEST['email'];
    $Phone = $_REQUEST['phone'];
    $Password = $_REQUEST['password'];
    $Address = $_REQUEST['address'];

    $qryCheck = "SELECT COUNT(*) AS cnt FROM `login` WHERE `email`='$Email'";
    $qryOut = mysqli_query($conn, $qryCheck);
    $fetchData = mysqli_fetch_array($qryOut);

    if ($fetchData['cnt'] > 0) {
        echo "<script>alert('Already exists an Account with same Email/Phone');window.location='deliveryRegister.php';</script>";
    } else {
        $qryReg = "INSERT INTO `deliveryboy`(`name`,`email`,`phone`,`address`)VALUES('$Name','$Email','$Phone','$Address')";
        // echo $qryReg;
        $qryLog = "INSERT INTO `login` (`reg_id`,`email`,`password`,`usertype`,`status`) VALUES((SELECT MAX(`delivery_id`) FROM `deliveryboy`),'$Email','$Password','Delivery Boy','Pending')";
        // echo $qryLog;
        if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
            echo "<script>alert('Registration Success');window.location = 'login.php';</script>";
        } else {
            echo "<script>alert('Registration Failed');window.location = 'deliveryRegister.php';</script>";
        }
    }
}

?>

<?php
include 'commonFooter.php';
?>