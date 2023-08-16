<?php
session_start();
include 'commonHeader.php';
include '../DBConnection/dbconnection.php';
?>
<style>
    /* Image Upload */

    .image-upload>input {
        display: none;
    }

    #img {
        cursor: pointer;
        height: 150px;
        width: 150px;
        padding: 10px;
        border-radius: 100px;
    }

    article,
    aside,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    /* Image upload */
</style>

<!-- slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-title ">
                    <h2 class="title">Shop</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Register
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
                    <form class="form-details" method="post" enctype="multipart/form-data">
                        <div class="image-upload text-center" style="margin-bottom: 30px">
                            <label for="file-input">
                                <img id="img" src="../assets/images/upload.png" alt="Upload Image"
                                    style="margin: auto" />
                            </label>
                            <h3>Select Shop Image</h3>
                            <input id="file-input" onchange="readURL(this)" name="imgfile" type="file" />
                        </div>
                        <input type="text" placeholder="Shop Name" class="form-control-text" required
                            pattern="[a-z A-Z]+" name="name">
                        <input type="email" placeholder="E-mail" class="form-control-text" required name="email">
                        <input type="text" placeholder="Phone" class="form-control-text" pattern="[6789][0-9]{9}"
                            maxlength="10" minlength="10" required name="phone">
                        <input type="password" placeholder="Password" class="form-control-text" required
                            name="password">
                        <input type="text" placeholder="Licence [JYOT123456]" class="form-control-text" required
                            name="licence" pattern="^[A-Z]{4}\d{6}$" maxlength="10">
                        <textarea placeholder="Shop Address" class="form-control-textarea" name="address"
                            required></textarea>
                        <button type="submit" class="btn btn-Shop Message" name="shopReg">SignUp
                            <i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-form end -->


<?php
if (isset($_REQUEST['shopReg'])) {
    $Name = $_REQUEST['name'];
    $Email = $_REQUEST['email'];
    $Phone = $_REQUEST['phone'];
    $Password = $_REQUEST['password'];
    $Licence = $_REQUEST['licence'];
    $Address = $_REQUEST['address'];
    $Image = $_FILES["imgfile"]["name"];
    $tempname = $_FILES["imgfile"]["tmp_name"];
    $folder = "image/" . $Image;

    $qryCheck = "SELECT COUNT(*) AS cnt FROM `login` WHERE `email`='$Email'";
    $qryOut = mysqli_query($conn, $qryCheck);
    $fetchData = mysqli_fetch_array($qryOut);

    if ($fetchData['cnt'] > 0) {
        echo "<script>alert('Already exists an Account with same Email/Phone');window.location='shopRegister.php';</script>";
    } else {
        if (move_uploaded_file($tempname, '../assets/image/' . $Image)) {
            $qryReg = "INSERT INTO `shop`(`name`,`email`,`phone`,`licence`,`address`,`image`)VALUES('$Name','$Email','$Phone','$Licence','$Address','$Image')";
            // echo $qryReg;
            $qryLog = "INSERT INTO `login` (`reg_id`,`email`,`password`,`usertype`,`status`) VALUES((SELECT MAX(`shop_id`) FROM `shop`),'$Email','$Password','Shop','Pending')";
            // echo $qryLog;
            if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                echo "<script>alert('Registration Success');window.location = 'login.php';</script>";
            } else {
                echo "<script>alert('Registration Failed');window.location = 'shopRegister.php';</script>";
            }
        }
    }
}

?>
<?php
include 'commonFooter.php';
?>