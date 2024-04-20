<?php
session_start();
require_once('connection.php');
require_once('cards.php');


$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);

if (isset($_POST['add'])){
   
    if(isset($_SESSION['added-orders'])){

        $item_array_id = array_column($_SESSION['added-orders'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'projects.php'</script>";
        }else{

            $count = count($_SESSION['added-orders']);
            $item_array = array(
                'product_id' => $_POST['product_id']
               
            );
        
            $_SESSION['added-orders'][$count] = $item_array;
        }

    }else{
      
        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['added-orders'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="author" name="nicolas compaq">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4shop projects page</title>
  <link rel="stylesheet" href="css/fix.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">

</head>

<body>

  <?php
  include("nav-ident.php")
  ?>

  <div class="container-{breakpoint} ">
    <div class="row me-lg-0 ">
      <div class="container d-inline-flex ">
        <?php include("nav2.php"); ?>


        <div class="col-lg-10 me-lg-0 ">

          <div class="" style="background-color: rgb(247, 253, 241); width: 100%; height: 100vh;">

            <span class="most">Top most latest cars</span>

  






            <div class="content2"  id="music">
                 

              <?php 
                               $sql = "SELECT * FROM products";

                               $result = mysqli_query($con, $sql);
                       
                           while ($row = mysqli_fetch_assoc($result)){
                            if ($row ['id'] <4) {

                              card($row['product_name'], $row['amount'], $row['product_image'],$row['delivery_amount'],$row['last_amount'],$row['percentage_off'],$row['remaining'], $row['id']);
                            }
                              
                               
                           }
              ?>

             
              <div id="carouselExample" class="carousel slide carousel-success controller" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" ">
                                      <div class=" carousel-item active">
                  <img src="images/638760_c914f90f884e4615a676e8171ff510ed~mv2.jpeg" class="d-block w-100 cas_img" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>Most affordable</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>

                </div>
                <div class="carousel-item">
                  <img src="images/5-signs-your-engine-needs-a-checkup-1-1623858739829.jpg" class="d-block w-100 cas_img" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>Most classic</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/car+paint+shop+bryan+tx-640w.webp" class="d-block w-100 cas_img" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>first choice</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" ">
                                      <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> 

            <span class="most1">Recently Added</span>

            <?php 
                               $sql = "SELECT * FROM products";

                               $result = mysqli_query($con, $sql);
                       
                           while ($row = mysqli_fetch_assoc($result)){
                            if ($row ['id'] >3) {

                              card($row['product_name'], $row['amount'], $row['product_image'],$row['delivery_amount'],$row['last_amount'],$row['percentage_off'],$row['remaining'], $row['id']);
                            }
                              
                               
                           }
              ?>
           
          </div>



        </div>
      </div>


      <!--  
                end
                      -->

    </div>
  </div>
  </div>
  <script>
  function search() {
    // Get the search input
    var searchInput = document.getElementById('search3').value;


    // Get the list of items
    var music = document.getElementById('music');

    // Loop through the items and hide those that don't match the search input
    for (var i = 0; i < music.children.length; i++) {
      var item = music.children[i];
      if (item.innerHTML.toLowerCase().indexOf(searchInput.toLowerCase()) === -1) {
        
        item.style.display = 'none';
       
      } else {
        item.style.display = 'block';
        
      }
    }
  }
</script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>