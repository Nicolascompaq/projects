<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "orders";

$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
    echo "access dined";
}else{
    echo
     "connection successfully";
}



?>