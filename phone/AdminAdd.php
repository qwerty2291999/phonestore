<?php
require_once 'connection.php';
$name= $_POST["name"];
$price= $_POST["price"];
$type= $_POST["type"];
$color= $_POST["color"];
$brand= $_POST["brand"];
$image= $_POST["image"];
$des= $_POST["des"];
$price= $_POST["price"];
$sql = "INSERT INTO shoesclass VALUES ('','$name', '$price', '$type', '$color', '$brand', '$image', '$des')";
if(mysqli_query($conn, $sql))
{   
    header("location:Admin.php");
}
else
{
    echo 'tach';
}
?>