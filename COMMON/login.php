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
                    <h2 class="title">Login</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
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
                        <p>WELCOME BACK</p>
                        <h2>Sign In Now</h2>
                    </div>
                    <form class="form-details" method="post">
                        <input type="email" placeholder="Your E-mail" class="form-control-text" name="email" required>
                        <input type="password" placeholder="Password" class="form-control-text" name="password"
                            required>
                        <button type="submit" class="btn btn-Shop Message" name="login">SignIn
                            <i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-form end -->
<?php
if (isset($_REQUEST['login'])) {
    $Email = $_REQUEST['email'];
    $Password = $_REQUEST['password'];

    $qry = "SELECT * FROM `login` WHERE `email`='$Email' AND `password`='$Password' and status='Approved'";
    $result = mysqli_query($conn, $qry);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $uid = $data['reg_id'];
        $type = $data['usertype'];
        $status = $data['status'];

        $_SESSION['uid'] = $uid;
        $_SESSION['type'] = $type;
        if ($status == 'Approved') {
            if ($type == 'Patient') {
                echo "<script>alert('Login Success'); window.location='../PATIENT/patientHome.php'</script>";
            } elseif ($type == 'Admin') {
                echo "<script>alert('Login Success');window.location='../ADMIN/adminHome.php'</script>";
            } elseif ($type == 'Delivery Boy') {
                echo "<script>alert('Login Success');window.location='../DELIVERY BOY/deliveryHome.php'</script>";
            } elseif ($type == 'Shop') {
                echo "<script>alert('Login Success');window.location='../SHOP/shopHome.php'</script>";
            }
        } else {
            echo "<script>alert('You are Not Approved');</script>";
        }
    } else {
        echo "<script>alert('Invalid Email / Password');</script>";
    }
}
?>

<?php
include 'commonFooter.php';
?>