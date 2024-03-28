<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="author" name="nicolas compaq">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4bond about page</title>
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
        <div class="row ">
            <div class="container-{breakpoint} d-inline-flex me-lg-0">
                <div class="col-lg-2 col-sm-0" style="position: fixed;" >

                    <?php include("nav2.php"); ?>

                </div>

                <div class="col-lg-10  col-sm-12 " id="all">

                    <div class="hup" style="background-color: rgb(67, 128, 6); width: 100%; height: 100vh; ">

                        <div class="row" id="back-image" style="margin-top: 7%; height: 60vh; background-repeat: no-repeat; background-size: cover;  background-image:url(images/highway-5c6e5194c9e77c0001cda269.jpg) ; padding-right: 0px;">

                            <div class="front-image" style=" width: 100%;  background:linear-gradient(200deg, rgb(61, 63, 61) ,rgba(0, 0, 0, 0.651)) ,transparent;">
                                <h4  style="text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 100px; color: aliceblue;"> About us
                                    <br>
                                    <center>
                                        <hr class="line">
                                        <P class="about-cont">
                                            Welcome to our car online selling company!<br>
                                            we are dedicated to providing a seamless and stress-free experience for our customers looking to buy or sell their vehicles,<br>
                                            with a careful curated selection of pre-owned cars from trysted sellers.
                                        </P>
                                    </center>
                                </h4>

                            </div>

                        </div>
                        <div class="row" id="ab-data" style="background-color:#FFBF00;">
                            <div class="col-lg-4 col-sm-12" style="background-color: white;">
                                <span>
                                    <img class="img-about" src="images/car.gif">
                                </span>
                            </div>
                            <div class="col-lg-8  col-sm-12">
                                <h3 style=" margin-top:2px; color: #5C774D; font-family: 'Times New Roman', Times, serif; ">Mission:</h3>
                                <p class="img2-about">
                                    We strive to offer quality and reliability at competitive prices, our team of experts is committed to assisting you every step of the way ,ensuring a smooth transaction and complete satisfaction .trust us to help ypu find your dream car or sell your current one with ease . let us be your go-to destination for all your automotive needs.
                                    discover a new way to buy and sell cars with us-your trusted partner in the automotive industry.
                                </p>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <p>
                                <h4 style="color: #5C774D; font-size: 35px; ">Board</h4>
                                <hr>
                                <ol>
                                    <li><img class="board" src="images/nico_8.jpg">
                                        <br>Director
                                    </li>
                                    <li><img class="board" src="images/p12.jpg">
                                        <br>Manager
                                    </li>
                                    <li><img class="board" src="images/nico_12.jpg">
                                        <br>Assis-manager
                                    </li>


                                </ol>
                                </p>
                            </div>
                        </div>
                        <?php
                        include("footer.php");
                        ?>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <script src="bootstrap\js\bootstrap.min.js"></script>
</body>

</html>