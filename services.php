<?php
session_start();
require_once('connection.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = $_POST['email'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];


   $query = "select * from massages where email = '$email' limit 1";
$result = mysqli_query($con, $query);
 
    if(mysqli_num_rows($result) > 0){
 
        echo "<script>alert('you have already commented')</script>";
    }else
   {
   
    if(!empty($email) && !empty($name) && !is_numeric($name))
    {

//save to database
$query = "insert into massages (email,name,comment) values ('$email','$name','$comment')";

mysqli_query($con, $query);

header("location:services.php");
die;




    }


    else{
        echo "<script>alert('invalid input')</script>";
    }
}
}


?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="author" name="nicolas compaq">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4shop service page</title>
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

                            .<div class="row">
                                <div class="col-lg-7 col-sm-12">
                                    <div class="ser-div">
                                        <p class="focus">What we focus on?</p>
                                        <br>
                                        <p class="focus1">
                                            We also offer exceptional customer service. From the moment you contact us, our team will be there to assist you with any questions or concerns you may have. We believe in building long-lasting relationships with our customers, and we will do everything we can to ensure your satisfaction.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-12 text-center">
                                    <img src="images/car-wash.gif" class=" img  serv-img">

                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p style="color: black; font-size:22px;">services we offer</p>
                                        <ol class="ser-main">
                                            <li>
                                                <summary>Engine Checkup
                                                    <details>
                                                        <p class="check-info">
                                                            Regular engine checkups are essential for ensuring that your vehicle runs smoothly and efficiently. During an engine checkup, a trained mechanic will inspect various components of your engine, including the oil and air filters, spark plugs, belts, and hoses.
                                                            The mechanic will also check the engine's fluid levels, including the oil, coolant, and brake fluid. They will inspect the battery and charging system to ensure that your vehicle starts reliably and the alternator is charging the battery properly.
                                                            The engine's emission control system will also be checked, including the exhaust system and catalytic converter, to ensure that your vehicle is not releasing harmful pollutants into the environment.
                                                            If any issues are identified during the checkup, the mechanic will discuss them with you and provide recommendations for repair or replacement. Regular engine checkups are an investment in the longevity and reliability of your vehicle, and can help you avoid costly repairs down the road.
                                                        </p>
                                                    </details>
                                                </summary>
                                            </li>
                                            <li>
                                                <summary>Car body painting
                                                    <details>
                                                        <p class="check-info">
                                                            Car body painting is an essential aspect of vehicle maintenance. Not only does it enhance the appearance of your car, but it also protects it from external elements such as dust, debris, and weather conditions. A well-painted car also has a higher resale value compared to one with a dull or faded paint job.
                                                            When it comes to car body painting, there are several factors to consider. These include the type of paint, the color, the cost, and the quality of the paint job. It's crucial to choose a reputable and experienced auto body shop that uses high-quality paint products and techniques to ensure a long-lasting and flawless finish.
                                                            The process of car body painting involves several steps, including surface preparation, priming, base coating, and clear coating. Each step is critical to achieving a smooth, even, and durable paint job. Professional auto body shops use advanced painting equipment and techniques to ensure that every detail is taken care of, from masking off areas that are not to be painted to applying the final clear coat.
                                                        </p>
                                                    </details>
                                                </summary>
                                            </li>
                                            <li>
                                                <summary>Wheel alignment
                                                    <details>
                                                        <p class="check-info">
                                                            Wheel alignment is an important aspect of vehicle maintenance that involves adjusting the angles of the wheels so that they are perpendicular to the ground and parallel to each other. Proper wheel alignment can improve your vehicle's handling, increase fuel efficiency, extend tire life, and enhance overall driving comfort and safety.
                                                            There are several signs that may indicate that your vehicle needs a wheel alignment. These include uneven or rapid tire wear, pulling to one side while driving, a crooked steering wheel, and a vibration in the steering wheel or the vehicle itself. If you notice any of these symptoms, it's important to have your vehicle's alignment checked by a professional.
                                                        </p>
                                                    </details>
                                                </summary>
                                            </li>
                                            <li>
                                                <summary>GPs installation
                                                    <details>
                                                        <p class="check-info">

                                                            It's important to have the installation done by a professional to ensure that the GPS system is installed correctly and doesn't interfere with any of the car's other systems. Additionally, make sure to choose a GPS system that is compatible with your car's make and model, and that has the features you need, such as real-time traffic updates or voice-guided directions.
                                                            Overall, GPS installation in cars can be a great addition to help you navigate and get to your destination safely and efficiently.
                                                        </p>
                                                    </details>
                                                </summary>
                                            </li>
                                            <li>
                                                <summary>Dashboard refurbish
                                                    <details>
                                                        <p class="check-info">
                                                                We can definitely help with refurbishing your dashboard! Our team of experts has years of experience in dashboard restoration and can help bring your dashboard back to life.
                                                                We offer a wide range of services, from cleaning and conditioning to repairing cracks and scratches. We use only high-quality products and materials to ensure that your dashboard looks and feels like new.

                                                        </p>
                                                    </details>
                                                </summary>
                                            </li>
                                        


                                        </ol>
                                    </div>
                                    <div class="col-lg-6">
                                        <br>
                                        <br>
                                        <ol class="ser-main">
                                            <li>
                                                <summary>Oli changing
                                                    <details>
                                                    We can definitely help with refurbishing your dashboard! Our team of experts has years of experience in dashboard restoration and can help bring your dashboard back to life.
                                                                We offer a wide range of services, from cleaning and conditioning to repairing cracks and scratches. We use only high-quality products and materials to ensure that your dashboard looks and feels like new.
                                                    </details>
                                                </summary>
                                            </li>
                                            <li>
                                                <summary>Pick up
                                                    <details>
                                                    We can definitely help with refurbishing your dashboard! Our team of experts has years of experience in dashboard restoration and can help bring your dashboard back to life.
                                                            We offer a wide range of services, from cleaning and conditioning to repairing cracks and scratches. We use only high-quality products and materials to ensure that your dashboard looks and feels like new.
                                                    </details>
                                                </summary>
                                            </li>

                                        </ol>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-sm-12 text-center">
                                        <div class="form22">
                                            <br>
                                    <hr>
                                   
                                        <form method="POST"  style="background-color: white;">
                                            <label class=" form-label">Email:</label>
                                            <input type="email" name="email" class="form-control"  placeholder="name@example.com">
                                            <label class=" form-label">Your name:</label>
                                            <input type="text" name="name" class="form-control"  placeholder="choose your name">
                                            <label class=" form-label">Comment:</label>
                                            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-outline-success">send comment</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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