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

<?php
$med_id = $_GET['id'];
$query = "SELECT * FROM `medicine` WHERE `med_id`='$med_id'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
?>
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
                                    <img id="img" src="../assets/image/<?php echo $data['image'] ?>" alt="Upload Image" style="margin: auto" />
                                </label>
                                <h3>Select Medicine Image</h3>
                                <input id="file-input" onchange="readURL(this)" name="imgfile" type="file" />
                            </div>
                            <input type="text" placeholder="Name" class="form-control-text" value="<?php echo $data['name'] ?>" required pattern="[a-z A-Z]+" name="name" title="Medicine Name">
                            <input type="text" placeholder="Dose" class="form-control-text" pattern="[0-9]+" required value="<?php echo $data['dose'] ?>" name="dose" title="Dose">
                            <input type="text" class="form-control-text" required name="mfgdate" value="<?php echo $data['mfgdate'] ?>" placeholder="Manufactured Date" title="Manufactured Date">
                            <input type="text" class="form-control-text" required name="expdate" value="<?php echo $data['expdate'] ?>" placeholder="Expiry Date" title="Expiry date">
                            <input type="text" placeholder="Price" class="form-control-text" pattern="[0-9]+" required value="<?php echo $data['rate'] ?>" name="price" title="Price">
                            <textarea placeholder="Description" title="Description" class="form-control-textarea" name="desc" required><?php echo $data['desc'] ?></textarea>
                            <button type="submit" class="btn btn-Shop Message" name="updateMed">Update<i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-form end -->


<?php
} else {
    echo "<script>alert('No Data')";
} ?>


<?php
if (isset($_REQUEST['updateMed'])) {
    $Name = $_REQUEST['name'];
    $Dose = $_REQUEST['dose'];
    $MfgDate = $_REQUEST['mfgdate'];
    $ExpDate = $_REQUEST['expdate'];
    $Price = $_REQUEST['price'];
    $Desc = $_REQUEST['desc'];
    $Image = $_FILES["imgfile"]["name"];
    $tempname = $_FILES["imgfile"]["tmp_name"];
    $folder = "image/" . $Image;

    if (move_uploaded_file($tempname, '../assets/image/' . $Image)) {
        $qryUpdate = "UPDATE `medicine` SET `name`='$Name',`dose`='$Dose',`mfgdate`='$MfgDate',`expdate`='$ExpDate',`rate`='$Price',`desc`='$Desc' WHERE `med_id`='$med_id'";
        if ($conn->query($qryUpdate) == TRUE) {
            echo "<script>alert('Medicine Updated');window.location = 'viewMedicine.php';</script>";
        } else {
            // echo "Error: " . mysqli_error($conn);
            echo "<script>alert('Failed');window.location = 'addMedicine.php';</script>";
        }
    } else {
        echo "Error:" . mysqli_error($conn);
    }
}

?>



<?php
include '../COMMON/commonFooter.php';
?>