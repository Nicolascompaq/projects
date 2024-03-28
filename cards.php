<?php

function card($productname, $productprice, $productimg, $delivery,$lastprice ,$tage,$itemleft,$productid){
    $element = "
    
    <div class=\"card \">
    <form action=\"projects.php\" method=\"post\" class=\"form\">
      <div class=\"card-header\" style=\"color: rgb(9, 38, 70); font-weight: bold; text-align: center; letter-spacing: 4px; font-size: 20px; background-color: rgb(166, 200, 248)\">
      $productname
      </div>
      <img class=\"card-img-top img-fluid\" src=\"images/$productimg\" style=\"height: 46%;\">
      <span class=\"card-text photos\">Photos</span>
      <div class=\"card-title\" style=\"font-weight: bold; text-align: center;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;\">
        <h3>$$productprice</h3>
       

      </div>
      <div class=\"card-text form-text mt-lg-0\">
      Save $tage% off now<br>
        <del style=\"color: #FFBF00; font-size: 20px; margin-left: 5px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;\">($$lastprice)</del>
        <br>
      <i style=\"font-size: 11px; position:absolute ;right: 20px; top: 90%;\" class=\"form-text\">$itemleft left</i>
      <i style=\"font-size: 14px; \" class=\"form-text mt-lg-4\"> Delivery $$delivery</i>

        <div class=\"card-footer text-center\">
          <button  name=\"add\" type=\"submit\"  class=\"btn btn-outline-success\" >Add to cart</button>
          <input type='hidden' name='product_id' value='$productid'>
        </div>
      </div>
      </form>
  </div>
 
    ";
    echo $element;
}


function cartElement($productimg, $productname, $productprice, $delivery,$productid){
  $element = "
  
  <form action=\"added-orders.php?action=remove&id=$productid\" method=\"post\" >
                  <div class=\"border rounded\">
                      <div class=\"row bg-white pb-4\">
                          <div class=\"col-md-3 pl-0\">
                              <img src=\"images/$productimg\" alt=\"Image1\" class=\"img-fluid\">
                          </div>
                          <div class=\"col-md-6\">
                              <h5 class=\"pt-2\">$productname</h5>
                              <small class=\"text-secondary\">delivery free:$$delivery</small>
                              <h5 class=\"pt-2\">$$productprice</h5>
                              <button id=\"save_btn\" type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                              <button type=\"submit\" class=\"btn btn-outline-success mx-2\" name=\"remove\">Remove order</button>
                             
                          </div>
                        
                      </div>
                  </div>
              </form>
  
  ";
  echo  $element;
}



?>