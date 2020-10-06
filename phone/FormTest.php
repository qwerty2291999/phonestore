 <?php
 require_once 'connection.php';
session_start();
$sessionid= session_id();
$sql = "insert into sessionsclass(sessions)VALUES('$sessionid')";

 ?>
