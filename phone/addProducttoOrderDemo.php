<?php
   $id= $_POST["id"];
   setcookie("productid", "$id", time()+3600, "/", "",  0);
?>