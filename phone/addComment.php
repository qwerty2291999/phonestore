<?php
require_once 'connection.php';
$id = $_POST["id"];
$name= $_POST["user"];
$comment= $_POST["review"];
$brand= $_POST["brand"];
$type= $_POST["type"];
$color= $_POST["color"];
$sql = "INSERT INTO `reviewsclass` (`id`, `name`, `comment`, `shoe_id`) VALUES ('', '$name', '$comment', '$id')";
if(mysqli_query($conn, $sql))
{   
  header("location:ProductDetail.php?id=$id&brand=$brand&type=$type&color=$color");
}
else
{
    echo 'tach';
}
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

