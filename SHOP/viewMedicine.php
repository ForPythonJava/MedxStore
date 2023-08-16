<?php
session_start();
$uid = $_SESSION['uid'];
include 'shopHeader.php';
include '../DBConnection/dbconnection.php';
?>

<style>
    #img {
        width: 251px;
        height: 200px;
        padding: 10px;
    }
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
                        <li class="breadcrumb-item active" aria-current="page">View Medicine</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- slider end -->

<?php
$a = "SELECT `medicine`.* FROM `medicine` WHERE `shopid`='$uid'";
$qry = mysqli_query($conn, $a);
// echo $a;
if (mysqli_num_rows($qry) < 1) {
    ?>
    <center>
        <h1>No Medicine Added</h1>
    </center>
    <?php
} else {
    ?>

    <!-- Product -->
    <div class="product-section mb-70">
        <div class="col-md-12 mb-5">
            <div class="search-box">
                <center> <input type="text" class="form-control" id="searchInput" style="width: 85%;"
                        placeholder="Search...">
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_array($qry)) {
                            ?>
                            <div class="col-lg-3 col-md-6 m-1 p-3 mb-0" id="card">
                                <div class="single-products sp-layout-two">
                                    <div class="products-image">
                                        <img src="../assets/image/<?php echo $row['image'] ?>" alt="img" id="img">
                                    </div>
                                    <div class="product-content">
                                        <br>
                                        <span class="price">&#x20B9;
                                            <?php echo $row['rate'] ?>
                                        </span>
                                        <h5 class="product-name">
                                            <?php echo $row['name'] ?>
                                        </h5>
                                        <h6 class="product-name">
                                            <?php echo $row['desc'] ?>
                                        </h6>
                                        <a href="updateMedicine.php?id=<?php echo $row['med_id'] ?>" class="btn btn-cart">
                                            <i class="fa fa-pencil" aria-hidden="true">
                                            </i>
                                            UPDATE
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <center>
                <div id="noMatchingData" style="display: none;">
                    <h1 class="m-5">No Results Found</h1>
                </div>
            </center>
        </div>
    </div>
    <!-- Product end-->

    <?php
}
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('input', function () {
            var searchQuery = $(this).val().toLowerCase();
            filterProducts(searchQuery);
        });
    });

    function filterProducts(query) {
        $('.single-products').each(function () {
            var productText = $(this).text().toLowerCase();
            if (productText.includes(query)) {
                $(this).show();
                $("#noMatchingData").hide();
            } else {
                $("#noMatchingData").show();
                $(this).hide();
            }
        });
    }
</script>

<?php
include '../COMMON/commonFooter.php';
?>