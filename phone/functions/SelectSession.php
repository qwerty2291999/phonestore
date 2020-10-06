<?php
              $sql ="SELECT * FROM sessionsclass where sessions = '$sessionid'";
              $result = mysqli_query($conn,$sql);
              $row = mysqli_fetch_array($result);
              echo $sessionid;
?>