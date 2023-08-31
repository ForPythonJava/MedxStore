<?php
session_start();
include 'adminHeader.php';
include '../DBConnection/dbconnection.php';
?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 95%;
        margin: 10px;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        color: black;
    }

    /* tr:nth-child(even) {
        background-color: #dddddd;
    } */

    #img {
        width: 100px;
        height: 100px;
        transition-duration: .9s;
    }

    #img:hover {
        transform: scale(1.5);
    }

    #statusPay {
        font-weight: bold;
        color: green;
    }
</style>

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-title ">
                    <h2 class="title">My Orders</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
$qry = "SELECT `cart`.*,`medicine`.*,`patient`.`name` AS `p_name` FROM `cart`,`medicine`,`patient` WHERE `cart`.`med_id`=`medicine`.`med_id` AND `patient`.`patient_id`=`cart`.`reg_id` AND `status`!='Paid'";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) < 1) {
    ?>
    <center>
        <h1 id="nodata" class="m-3">No Orders</h1>
    </center>
    <?php

} else {
    ?>

    <center>
        <!-- <h1 class="m-3 bread">My Products</h1> -->
        <input type="text" class="form-control m-3" id="searchInput" style="width: 90%;" placeholder="Search...">
        <table id="table" border="1" style="width: 90%;">
            <thead>
                <tr style="text-align: center;">
                    <th>Ordered By</th>
                    <th>Name</th>
                    <th>Dose</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Image</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr id="row{{ forloop.counter }}" style="text-align: center;">
                        <td>
                            <?php echo $row['p_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['dose'] ?>mg
                        </td>
                        <td>
                            <p id="quantityid" data-quantityCheck="<?php echo $row['qty'] ?>">
                                <?php echo $row['qty'] ?>
                            </p>
                        </td>
                        <td>
                            <p id="amountid">
                                &#8377;
                                <?php echo $row['amount'] ?>
                            </p>
                        </td>
                        <td>
                            <img src="../assets/image/<?php echo $row['image'] ?>" alt="img" id="img">
                        </td>
                        <td id="statusPay">
                            <?php echo $row['status'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <div id="noMatchingData" style="display: none;">
            <h1 class="m-5">No Results Found</h1>
        </div>
    </center>
<?php } ?>


<!-- Include Bootstrap JS and jQuery -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle search input
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            var rows = $("#tableBody tr");
            var matchingRows = rows.filter(function () {
                var rowText = $(this).text().toLowerCase();
                return rowText.indexOf(value) > -1;
            });
            rows.hide(); // Hide all rows initially
            matchingRows.show(); // Show matching rows
            if (matchingRows.length === 0) {
                $("#noMatchingData").show(); // Show message if no matching rows
                $("#table").hide();
            } else {
                $("#noMatchingData").hide(); // Hide message if there are matching rows
                $("#table").show();
            }
        });
    });
</script>






<?php
include '../COMMON/commonFooter.php';
?>