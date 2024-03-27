<?php
include("connection.php");


$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row ['id'] =7) {
       
    
  


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="author" name="nicolas compaq">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4bond</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">


    </head>

    <body>
        <div class="container">

            <div class="card">

                <div class="card-header" style="color: rgb(9, 38, 70); font-weight: bold; text-align: center; letter-spacing: 4px; font-size: 20px; background-color: rgb(166, 200, 248)">
                    <?php echo $row['product_name'] ?>
                </div>
                <img class="img card-img img-fluid" src="images/<?php echo $row['product_image']?>" style="height: 50%;">
                <span class="card-text photos">Photos</span>
                <div class="card-title" style="font-weight: bold; text-align: center;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <h3><?php echo $row['amount']?><i style="font-size: 14px; position:absolute ;left: 2px; top: 64%;" class="form-text mt-lg-4"> <?php echo $row['delivery_amount']?> delivery</i></h3>
                    <i style="font-size: 11px; position:absolute ;right: 20px; top: 90%;" class="form-text"><?php echo $row['remaining']?>left</i>

                </div>
                <div class="card-text form-text mt-lg-0">
                    Save <?php echo $row['percentage_off']?>% off now<br>
                    <del style="color: #FFBF00; font-size: 20px; margin-left: 5px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">(<?php echo $row['last_amount']?>)</del>
                    <div class="card-footer text-center">
                        <button class = "btn btn-outline-success" data-id="<?php echo $row['id']?>">Add to chart</button>
                    </div>
                </div>
            </div>

        </div>
    <?php 
  } 
} ?>
    <p  id="text">
        sometext
    </p>
    <form method="POST">
        <input type="text" name="user">
<input type="file" name="pic">
<textarea name="comment"></textarea>
<button type="submit">jj</button>
    </form>

    <?php
  
    if(isset($_REQUEST['user'])){
var_dump( $_REQUEST['user'],$_POST["comment"]);
    }
    
    $a = 2;
echo ++$a;
    ?>
    <script>
       console.log("nicolas");
    </script>
 <!--  <script>

$(document).ready(function(){
$('button').click(function(){
    id = $(this).data('id');
document.write(id);
})
})
    </script> -->
    
    
    </body>

    </html>