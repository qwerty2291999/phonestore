<?php
require_once 'connection.php';
require_once 'sessions.php';
$id= $_POST["id"];
$brand= $_POST["brand"];
$type= $_POST["type"];
$color= $_POST["color"];
$name= $_POST["name"];
$price= $_POST["price"];
$img= $_POST["image"];
$session= $_POST["sessions"];
$sql ="SELECT * FROM `orderclass` WHERE `shoe_id` = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$quantity= $row["shoe_quantity"];
$defaultquantity = 1;
$newquantity = $quantity + $defaultquantity;
$total= $price * $quantity;
$defaulttotal = $price * $defaultquantity;
$oid = $row["order_id"];      
if ($id == $row["shoe_id"])
{
    $sql1 = "UPDATE `orderclass` SET shoe_quantity = '$newquantity', `shoe_totalprice` = '$total' WHERE order_id = '$oid'";
    if(mysqli_query($conn, $sql1)){
    header("location:ProductDetail.php?id=$id&brand=$brand&type=$type&color=$color");
    }
 else {
    echo 'tach';
    }
}
 else{
    $sql = "insert into orderclass(shoe_id,shoes_brand,shoe_type,shoe_name,shoe_price,shoe_image,shoe_color,shoe_totalprice,order_sessions)VALUES('$id','$brand','$type','$name','$price','$img','$color','$defaulttotal','$session')";
    if(mysqli_query($conn, $sql)){
    header("location:ProductDetail.php?id=$id&brand=$brand&type=$type&color=$color");
    }
    else {
    echo 'tach';
    }
 }
 
?>