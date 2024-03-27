<?php
session_start();
require_once('connection.php');


if (isset($_POST['add'])) {
  if(isset($_SESSION['added-orders'])){
    $item_array_id = array_column($_SESSION['added-orders'],"product_id");
    
    if(in_array($_POST['product_id'],$item_array_id)){
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
    $_SESSION['added-orders'][] = $item_array;
    print_r($_SESSION['added-orders']);
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

          <div class="" style="background-color: rgb(67, 128, 6); width: 100%; height: 100vh;">

            <span class="most">Top most latest cars</span>



            <div class="content2">
              <?php
              include("connection.php");


              $query = "SELECT * FROM products";
              $result = mysqli_query($con, $query);
              while ($row = mysqli_fetch_assoc($result)) {
               


              ?>
                  <div class="card">
                    <form method="post">

                      <div class="card-header" style="color: rgb(9, 38, 70); font-weight: bold; text-align: center; letter-spacing: 4px; font-size: 20px; background-color: rgb(166, 200, 248)">
                        <?php echo $row['product_name'] ?>
                      </div>
                      <img class="img card-img img-fluid" src="images/<?php echo $row['product_image'] ?>" style="height: 50%;">
                      <span class="card-text photos">Photos</span>
                      <div class="card-title" style="font-weight: bold; text-align: center;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        <h3><?php echo $row['amount'] ?><i style="font-size: 14px; position:absolute ;left: 2px; top: 64%;" class="form-text mt-lg-4"> <?php echo $row['delivery_amount'] ?> delivery</i></h3>
                        <i style="font-size: 11px; position:absolute ;right: 20px; top: 90%;" class="form-text"><?php echo $row['remaining'] ?>left</i>

                      </div>
                      <div class="card-text form-text mt-lg-0">
                        Save <?php echo $row['percentage_off'] ?>% off now<br>
                        <del style="color: #FFBF00; font-size: 20px; margin-left: 5px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">(<?php echo $row['last_amount'] ?>)</del>
                        <div class="card-footer text-center">
                          <button  name="add" type="submit"  class="btn btn-outline-success" >Add to chart</button>
                          <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        </div>
                      </div>
                    </form>
                  </div>

              <?php 
              } ?>
              <!-- 
              <div id="carouselExample" class="carousel slide carousel-success controller" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" ">
                                      <div class=" carousel-item active">
                  <img src="images/range-rover-right-front-three-quarter.webp" class="d-block w-100 cas_img" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>Most affordable</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>

                </div>
                <div class="carousel-item">
                  <img src="images/modern-light-green-car-crossover-for-travel-with-black-insets-in-front-3d-render-on-white-background-with-shadow-2A604AC.jpg" class="d-block w-100 cas_img" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>Most classic</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/103611185-modern-green-car-crossover-in-front-3d-render-on-white-background-with-shadow.jpg" class="d-block w-100 cas_img" alt="...">
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
-->
   
            <!-- 
                         
                       
                                                            
                               
                            
                                  <span class="most1">Recently  Added</span>
                    
                       
                                              
                   
                       
                       
                       
                
                                  -->
          </div>



        </div>
      </div>


      <!--  
                end
                      -->

    </div>
  </div>
  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>