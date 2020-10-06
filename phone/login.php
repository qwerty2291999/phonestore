<?php
	require_once 'connection.php';
        require_once 'sessions.php';
	if (isset($_POST["btnSubmit"])) {
		// lấy thông tin người dùng
		$user1 = $_POST["user"];
		$pass1 = $_POST["pass"];
		$user1 = strip_tags($user1);
		$user1 = addslashes($user1);
		$pass1 = strip_tags($pass1);
		$pass1 = addslashes($pass1);
		if ($user1 == "" || $pass1 =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from accountclass where username = '$user1' and password = '$pass1' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				$_SESSION['user'] = $user1;
                                
                header('Location: Admin.php');
			}
		}
	}
?>