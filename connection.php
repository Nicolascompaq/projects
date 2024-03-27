<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "orders";

$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
    die ("access dined" .  mysqli_error($connect));
}


?>