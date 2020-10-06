<?php
require_once 'connection.php';
require_once 'sessions.php';
for($i = 0; $i<count($_POST['oid']); $i++){
$name= $_POST["name"];
$oid = $_POST["oid"][$i];
$sid = $_POST["sid"][$i];
$sname = $_POST["shoename"][$i];
$quan = $_POST["quantity"][$i];
$address= $_POST["address"];
$email= $_POST["email"];
$total= $_POST["total"][$i];
$phone= $_POST["phone"];
$session= $_POST["sessions"][$i];
$sql = "INSERT INTO `paymentclass` (`payment_id`, `name`, `phone_number`, `email`, `address`, `order_id`, `shoe_id`, `shoe_name`, `shoe_quantity`, `total_price`, `sessions`) VALUES ('', '$name', '$phone', '$email', '$address','$oid', '$sid', '$sname', '$quan', '$total', '$session')";
if(mysqli_query($conn, $sql)){
$sql="DELETE FROM orderclass WHERE order_id=$oid";
if(mysqli_query($conn, $sql))
{   
      header("location:index.php");
}
else
{
    echo 'tach';
}
      
    }
    else {
    echo 'tach';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

