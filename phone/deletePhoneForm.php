<?php
require_once 'connection.php';
$id=$_POST["id"];
$sql="DELETE FROM shoeclass WHERE shoe_id=$id";
if(mysqli_query($conn, $sql))
{   
    header("location:Admin.php");
}
else
{
    echo 'tach';
}
?>