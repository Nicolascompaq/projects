<?php
include("connection.php");


$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $productimg = $row['product_image'];
 $productname = $row['product_name'];
  $productprice = $row['amount'];
  $productid = $row['id'];
}


function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"added-orders.php?action=remove&id=$productid\" method=\"post\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"images/$productimg\" alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Send order</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Delete order</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>