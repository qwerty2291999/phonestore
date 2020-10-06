<?php
require_once 'connection.php';
$id=$_POST["id"];
//$id='13';
$sql="DELETE FROM paymentclass WHERE payment_id=$id";
if(mysqli_query($conn, $sql))
{   
    header("location:adminpaymentinfo.php");
}
else
{
    echo 'tach';
}
?>