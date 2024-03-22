<?php
session_start();

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $type = $_POST['type'];
    $amount = $_POST['amount'];
if(!empty($type) && !empty($amount)){
    $query = "insert into charts (type,amount) values ('$type','$amount')";
    mysqli_query($con, $query);

header("location:index.php");
die;
}else{
    echo "modified";
}
}
?>


<form class="form" method="post">
    <label class="form-label">
        type
    </label>
<input type="text" name="type">
<label class="form-label">
    amount
</label>
<input type="number" name="amount">
<button type="submit">submit</button>
</form>