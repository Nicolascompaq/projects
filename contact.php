<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="author" name="nicolas compaq">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4shop contact page</title>
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

                        <div class="content2">

                            <p class="top-p1">
                                Contact info<span class="follwing"><br>platforms
                                </span>
                            </p>
                            <div class="back"></div>
                            <ul class="platfrom">
                                <a href="facebook.com" style="text-decoration:none; border:none;">
                                    <li class="links face">facebook</li>
                                </a>
                                <a href="whatsapp.com" style="text-decoration:none; border:none;">
                                    <li class="links what">whatsapp</li>
                                </a>
                                <a href="twitter.com" style="text-decoration:none; border:none;">
                                    <li class="links twitter">twitter</li>
                                </a>
                                <a href="instagram.com" style="text-decoration:none; border:none;">
                                    <li class="links insta">instagram</li>
                                </a>
                                <a href="discord.com" style="text-decoration:none; border:none;">
                                    <li class="links disc">discord</li>
                                </a>
                                <a href="wordpress.com" style="text-decoration:none; border:none;">
                                    <li class="links wordpress">wordpress</li>
                                </a>
                            </ul>

                            <div class="foot1">
                                <?php
                                include("footer.php");
                                ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="bootstrap\js\bootstrap.min.js"></script>
</body>

</html>