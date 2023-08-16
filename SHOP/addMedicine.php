<?php
session_start();
$uid = $_SESSION['uid'];
include 'shopHeader.php';
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
                    <h2 class="title">Medicne</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="shopHome.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Medicine</li>
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
                    <!-- <div class="heading-part">
                        <p>NEW HERE ?</p>
                        <h2>Sign Up Now</h2>
                    </div> -->
                    <form class="form-details" method="post" enctype="multipart/form-data">
                        <div class="image-upload text-center" style="margin-bottom: 30px">
                            <label for="file-input">
                                <img id="img" src="../assets/images/upload.png" alt="Upload Image"
                                    style="margin: auto" />
                            </label>
                            <h3>Select Medicine Image</h3>
                            <input id="file-input" onchange="readURL(this)" name="imgfile" type="file" />
                        </div>
                        <input type="text" placeholder="Name" class="form-control-text" required pattern="[a-z A-Z]+"
                            name="name">
                        <input type="text" placeholder="Dose" class="form-control-text" pattern="[0-9]+" required
                            name="dose">
                        <input type="text" class="form-control-text" required name="mfgdate"
                            onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Manufactured Date">
                        <input type="text" class="form-control-text" required name="expdate"
                            onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Expiry Date">
                        <input type="text" placeholder="Price" class="form-control-text" pattern="[0-9]+" required
                            name="price">
                        <textarea placeholder="Description" class="form-control-textarea" name="desc"
                            required></textarea>
                        <button type="submit" class="btn btn-Shop Message" name="addMed">Add<i
                                class="fas fa-plus-circle"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-form end -->


<?php
if (isset($_REQUEST['addMed'])) {
    $Name = $_REQUEST['name'];
    $Dose = $_REQUEST['dose'];
    $MfgDate = $_REQUEST['mfgdate'];
    $ExpDate = $_REQUEST['expdate'];
    $Price = $_REQUEST['price'];
    $Desc = $_REQUEST['desc'];
    $Image = $_FILES["imgfile"]["name"];
    $tempname = $_FILES["imgfile"]["tmp_name"];
    $folder = "image/" . $Image;

    $qryCheck = "SELECT COUNT(*) AS cnt FROM `medicine` WHERE `name`='$Name'";
    $qryOut = mysqli_query($conn, $qryCheck);
    $fetchData = mysqli_fetch_array($qryOut);

    if ($fetchData['cnt'] > 0) {
        echo "<script>alert('Medicine Already exists');window.location='addMedicine.php';</script>";
    } else {
        if (move_uploaded_file($tempname, '../assets/image/' . $Image)) {
            $qryAdd = "INSERT INTO `medicine`(`name`,`dose`,`mfgdate`,`expdate`,`rate`,`desc`,`shopid`,`image`)VALUES('$Name','$Dose','$MfgDate','$ExpDate','$Price','$Desc','$uid','$Image')";
            if ($conn->query($qryAdd) == TRUE) {
                echo "<script>alert('Medicine Added');window.location = 'viewMedicine.php';</script>";
            } else {
                // echo "Error: " . mysqli_error($conn);
                echo "<script>alert('Failed');window.location = 'addMedicine.php';</script>";
            }
        } else {
            echo "Error:" . mysqli_error($conn);
        }
    }
}

?>

<?php
include '../COMMON/commonFooter.php';
?>