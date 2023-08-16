<?php
session_start();
include 'patientHeader.php';
include '../DBConnection/dbconnection.php';
$uid = $_SESSION['uid'];
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

    /* Checkout */

    #checkout {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 0;
        display: flex;
        align-items: center;
        padding: 16px 20px 16px 15px;
        height: 56px;
        position: relative;
        font-family: inherit;
        font-size: 1em;
        line-height: 1em;
        font-weight: 500;
        background-color: white;
        cursor: pointer;
        border-radius: 32px;
        width: 150px;
        box-shadow: 0 10px 32px rgba(0, 0, 0, 0.25);
        -webkit-tap-highlight-color: transparent;
        transition: box-shadow 0.2s ease, background-color 150ms ease;
        text-decoration: none;
        color: black;
    }


    #checkout:hover,
    #checkout:active {
        background-color: #eee;
    }

    #cart {
        margin-right: 12px;
        transform-origin: 20% 100%;
        opacity: 1;
    }

    @keyframes slide-up-fade {
        from {
            transform: translateY(0);
            opacity: 1;
        }

        to {
            transform: translateY(-16px);
            opacity: 0;
        }
    }

    @keyframes roll-out {
        0% {
            transform: translate(0) rotate(0);
        }

        20% {
            transform: translate(0) rotate(-70deg);
            opacity: 1;
        }

        50% {
            transform: translate(0) rotate(-45deg);
            opacity: 1;
        }

        100% {
            transform: translate(140px) rotate(-47deg);
            opacity: 0;
        }
    }

    .checked-out span {
        animation: slide-up-fade 150ms 1;
        animation-fill-mode: both;
    }

    .checked-out #cart {
        animation: roll-out 1s 1 150ms;
        animation-timing-function: ease-in;
        animation-fill-mode: both;
    }

    @keyframes checkmark {
        from {
            stroke-dashoffset: 26px;
        }

        to {
            stroke-dashoffset: 0;
        }
    }

    #check {
        position: absolute;
        left: calc(50% - 12px);
    }

    #check path {
        stroke-dasharray: 26px;
        stroke-dashoffset: 26px;
    }

    .checked-out #check path {
        animation: checkmark 150ms 1 1150ms;
        animation-timing-function: ease-in;
        animation-fill-mode: both;
    }

    .checked-out button {
        background-color: #20bf6b;
        transition-delay: 1150ms;
    }
</style>

<!-- slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-title ">
                    <h2 class="title">Cart</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb slider-breadcrumb">
                        <li class="breadcrumb-item"><a href="shopHome.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- slider end -->

<?php
$qry = "SELECT `cart`.*,`medicine`.* FROM `cart`,`medicine` WHERE `cart`.`med_id`=`medicine`.`med_id` AND `status`='incart' AND `cart`.`reg_id`='$uid'";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) < 1) {
    ?>
    <center>
        <h1 id="nodata" class="m-3">Cart is Empty</h1>
    </center>
    <?php

} else {
    ?>
    <div id="div">
        <center>
            <h1 class="m-5 bread"></h1>
            <input type="text" class="form-control mb-3" id="searchInput" style="width: 95%;" placeholder="Search...">
            <table id="table" border="1" style="width: 95%;" class="mb-5">
                <thead>
                    <tr style="text-align: center;">
                        <th>Name</th>
                        <th>Dose</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Image</th>
                        <th>Actions</th> <!-- New column for increasing and decreasing quantity -->
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr id="row{{ forloop.counter }}" style="text-align: center;">
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
                                    <?php echo $row['amount'] ?>
                                </p>
                            </td>
                            <td>
                                <img src="../assets/image/<?php echo $row['image'] ?>" alt="img" id="img">
                            </td>
                            <td>
                                <!-- Add buttons for increasing and decreasing quantity -->
                                <button class="quantity-button" id="decrease" data-id="<?php echo $row['cartid'] ?>"
                                    data-action="decrease" data-medid="<?php echo $row['med_id'] ?>"
                                    data-qty="<?php echo $row['qty'] ?>" data-stock="<?php echo $row['stock'] ?>"
                                    data-amount="<?php echo $row['rate'] ?>">-</button>
                                <span id="secondQty">
                                    <?php echo $row['qty'] ?>
                                </span>
                                <button class="quantity-button" id="increase" data-id="<?php echo $row['cartid'] ?>"
                                    data-action="increase" data-medid="<?php echo $row['med_id'] ?>"
                                    data-qty="<?php echo $row['qty'] ?>" data-stock="<?php echo $row['stock'] ?>"
                                    data-amount="<?php echo $row['rate'] ?>">+</button>
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
    </div>
    <?php
    $sumQry = "SELECT SUM(`amount`) AS cartsum FROM `cart` WHERE `reg_id`='$uid' AND `status`='incart'";
    if ($resultSum = mysqli_query($conn, $sumQry)) {
        $row = mysqli_fetch_array($resultSum);
    }
    ?>
    <center>
        <h1 id="amtNo" class="m-3">Total Amount: &#8377;
            <span id="total">
                <?php echo $row['cartsum'] ?>
            </span>
        </h1>
        <!-- Checkout Button -->
        <a id="checkout" class="m-3" href="CreditCardForm.php">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24" id="cart">
                <path fill="#000000"
                    d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" />
            </svg>
            <span>Checkout</span>
            <svg id="check" style="width:24px;height:24px" viewBox="0 0 24 24">
                <path stroke-width="2" fill="none" stroke="#ffffff" d="M 3,12 l 6,6 l 12, -12" />
            </svg>
        </a>

    </center>
    <?php
}
?>
<center>
    <h1 id="nodata" class="m-3" style="display: none;">Cart is Empty</h1>
</center>

<script>
    const btn = document.querySelector('button');

    btn.addEventListener('click', () => {
        document.documentElement.classList.toggle('checked-out');
    });
</script>

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
                $("#amtNo").hide();
            } else {
                $("#noMatchingData").hide(); // Hide message if there are matching rows
                $("#table").show();
                $("#amtNo").show();
            }
        });
    });
</script>

<script>
    // var testData, quantityValue, total;
    // const returnData = () => {
    //     window.addEventListener('DOMContentLoaded', function () {
    //         var stockElement = document.getElementById('stockid');
    //         var qtyElement = document.getElementById('quantityid');
    //         var initStock = stockElement.getAttribute('data-initStock');
    //         var quantity = qtyElement.getAttribute('data-quantityCheck');
    //         console.log('Initial Stock:', initStock);
    //         console.log('Actual Quantity:', quantity);
    //         testData = initStock;
    //         quantityValue = quantity;
    //         total = parseInt(testData) + 1;
    //         return initStock;
    //     });
    // };
    // returnData();
    $(document).ready(function () {
        $('.quantity-button').click(function () {
            const id = $(this).data('id');
            const action = $(this).data('action');
            const medid = $(this).data('medid');
            const qty = $(this).data('qty');
            const stock = $(this).data('stock');
            var amount = parseFloat($(this).data('amount'));

            // Store a reference to the current button for use inside AJAX callbacks
            var $button = $("#increase");
            var $buttonDecrease = $("#decrease");
            console.log(qty + "Hii" + stock);
            if (stock == 0 && action == "increase") {
                alert("Reached Maximum Limit");
            } else {
                if (qty == 1 && action == "decrease") {
                    var option = confirm("Are you sure to delete this Item?");
                    if (option) {
                        // Perform AJAX call to delete the item
                        $.ajax({
                            url: 'deleteCartItem.php',
                            type: 'POST',
                            cache: false,
                            data: { id: id },
                            success: function (response) {
                                if (typeof response === "string") {
                                    response = JSON.parse(response); // Parse the string if needed
                                }
                                if (response.status == "success") {
                                    $("#div").hide();
                                    $("#amtNo").hide();
                                    $("#nodata").show();
                                }
                                // Handle success if needed
                                // For example, update the UI to reflect the change
                            },
                            error: function (xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                } else {
                    $.ajax({
                        url: 'updateQuantity.php',
                        type: 'POST',
                        cache: false,
                        data: { id: id, action: action, medid: medid, qty: qty, stock: stock, amount: amount },
                        success: function (response) {
                            if (typeof response === "string") {
                                response = JSON.parse(response); // Parse the string if needed
                            }
                            location.reload();
                            // console.log("Total Amount:", response.updatedAmount);
                            // console.log("Updated Cart Quantity:", response.updateCartQty);
                            // console.log("Updated Cart Quantity:", response.ogAmount);

                            // var amtid = $("#amountid");
                            // amtid.text(response.updatedAmount);
                            // amtid.show();



                            // var stockid = $("#stockid");
                            // stockid.text(response.updateStockQty);
                            // stockid.show();


                            // var newQty = $("#quantityid");
                            // newQty.text(response.updateCartQty);
                            // newQty.show();

                            // var secondQty = $("#secondQty");
                            // secondQty.text(response.updateCartQty);
                            // secondQty.show();


                            // var total = $("#total");
                            // total.text(response.updatedAmount);
                            // total.show();
                            // console.log(response.updateCartQty);

                            $button.data('amount', response.ogAmount); // Update data-amount
                            $button.data('qty', response.updateCartQty); // Update data-qty
                            $button.data('stock', response.updateStockQty); // Update data-qty

                            $buttonDecrease.data('amount', response.ogAmount); // Update data-amount
                            $buttonDecrease.data('qty', response.updateCartQty); // Update data-qty
                            $buttonDecrease.data('stock', response.updateStockQty); // Update data-qty

                            // var amtt = $button.data('amount');
                            // console.log("isch." + amtt);
                            // var amtt = $buttonDecrease.data('amount');
                            // console.log("isch." + amtt);

                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            }
        });
    });
</script>
<?php
include '../COMMON/commonFooter.php';
?>