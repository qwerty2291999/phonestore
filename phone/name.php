<?php
require_once 'connection.php';
require_once 'sessions.php';

$number = count($_POST["oid"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["oid"][$i] != ''))
		{
			$sql = "INSERT INTO paymentclass(order_id) VALUES('".mysqli_real_escape_string($conn,$_POST["oid"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}