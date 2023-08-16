<?php
include 'patientHeader.php';
include '../DBConnection/dbconnection.php';
?>

<style>
    #img {
        padding: 50px;
    }
</style>

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-title ">
                    <h2 class="title">Shops</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shops</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
$a = "SELECT `shop`.* FROM `shop`,`login` WHERE `shop`.`shop_id`=`login`.`reg_id` AND `login`.`status`='Approved' AND `login`.`usertype`='Shop'";
$qry = mysqli_query($conn, $a);
if (mysqli_num_rows($qry) < 1) {
    ?>
    <center>
        <h1>No Shops Registered</h1>
    </center>
    <?php
} else {
    ?>


    <div class="product-section mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_array($qry)) {
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-products sp-layout-two">
                                    <div class="products-image">
                                        <img src="../assets/image/<?php echo $row['image'] ?>" alt="img" id="img">
                                    </div>
                                    <div class="product-content">
                                        <span class="price">
                                            <?php echo $row['name'] ?>
                                        </span>
                                        <h5 class="product-name">
                                            <?php echo $row['address'] ?>
                                        </h5>
                                        <a href="patientViewMedicines.php?id=<?php echo $row['shop_id'] ?>" class="btn btn-cart"><i
                                                class="fa fa-medkit"></i>
                                            View Medicines</a>
                                    </div>
                                </div>
                            </div>
                        <?php }
} ?>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>



    <?php
    include '../COMMON/commonFooter.php';
    ?>