<?php
session_start();
include("client.php");
require_once('connection.php');

if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['added-orders'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['added-orders'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'added-orders.php'</script>";
            }
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
</head>

<body>
    <?php include("nav.php"); ?>
    <?php include("nav3.php"); ?>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['added-orders'])) {
                        $product_id = array_column($_SESSION['added-orders'], 'product_id');

                        $query = "SELECT * FROM products";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($productimg, $productname, $productprice, $productid);
                                    $total = $total + (int)$productprice;
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['added-orders'])) {
                                $count  = count($_SESSION['added-orders']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                                    echo $total;
                                    ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <script src="bootstrap\js\bootstrap.min.js"></script>
</body>

</html>