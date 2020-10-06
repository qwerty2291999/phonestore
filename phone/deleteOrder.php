<?php
require_once 'connection.php';
$id=$_POST["id"];
//$id='13';
$sql="DELETE FROM orderclass WHERE order_id=$id";
if(mysqli_query($conn, $sql))
{   
    header("location:cart.php");
}
else
{
    echo 'tach';
}
?>