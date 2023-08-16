<?php
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

    tr:nth-child(even) {
        background-color: #dddddd;
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
$a = "SELECT shop.*,`login`.* FROM `shop`,`login` WHERE `shop`.`shop_id`=`login`.`reg_id` AND `login`.`usertype`='Shop'";
$qry = mysqli_query($conn, $a);
if (mysqli_num_rows($qry) < 1) {
    ?>
    <center>
        <h1>No Shops Registered</h1>
    </center>
    <?php

} else {
    ?>

    <center>
        <h1 class="m-5 bread"></h1>
        <input type="text" class="form-control mb-3" id="searchInput" style="width: 95%;" placeholder="Search...">
        <table id="table" border="1" style="width: 95%;" class="mb-5">
            <thead>
                <tr style="text-align: center;">
                    <th style="border: 1px;color: black;">Name</th>
                    <th>E-Mail</th>
                    <th>Phone</th>
                    <th>Licenece Number</th>
                    <th>Address</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php
                while ($row = mysqli_fetch_array($qry)) {
                    ?>
                    <tr id="row{{ forloop.counter }}" style="text-align: center;">
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['phone'] ?>
                        </td>
                        <td>
                            <?php echo $row['licence'] ?>
                        </td>
                        <td>
                            <?php echo $row['address'] ?>
                        </td>
                        <?php if ($row['status'] == "Pending") {
                            ?>
                            <td>
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <a href="manageShop.php?id=<?php echo $row['email'] ?>&status=Approved"
                                        class="btn btn-outline-success">Approve</a>
                                    <a href="manageShop.php?id=<?php echo $row['email'] ?>&status=Rejected"
                                        class="btn btn-outline-danger ml-2">Reject</a>
                                </div>
                            </td>
                        <?php } else { ?>
                            <td>
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <a href="manageShop.php?id=<?php echo $row['email'] ?>&status=Delete"
                                        class="btn btn-outline-danger ml-2">Delete</a>
                                </div>
                            </td>
                        <?php }
                        ?>
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

    <?php
}
?>

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