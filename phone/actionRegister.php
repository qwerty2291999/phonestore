<?php
require_once 'connection.php';
$user= $_POST["user"];
$pass= $_POST["pass"];
$sql = "INSERT INTO `accountclass` VALUES ('','$user', '$pass',)";
if(mysqli_query($conn,$sql))
{   
   header("location:RegisterCompleted.php");
}
else
{
    echo 'ok';
}
?>
