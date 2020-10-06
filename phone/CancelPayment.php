<?php
require_once 'connection.php';
$id= $_POST["id"];
$status= $_POST["status"];
$date= $_POST["date"];
$sql = "UPDATE `paymentclass` SET `date_time_end` = '$date', `status` = '$status' WHERE `paymentclass`.`payment_id` = $id;";
if(mysqli_query($conn, $sql))
{   
    header("location:adminpaymentinfo.php");
}
else
{
    echo 'tach';
}
?>