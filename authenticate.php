<?php
	$username = $_POST["username"];
	$password = SHA1($_POST["password"]);
	
	$con = mysqli_connect("localhost","root", "","ipilot");
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "SELECT * FROM users WHERE username = \"" . $username . "\" AND password = \"" . $password . "\"";
	if ($stmt = mysqli_prepare($con, $query)) {
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		if (mysqli_stmt_num_rows($stmt) == 1) {
			echo "login success";
		}
		else {
			$expire=time()+60*60*24*30;
			setcookie("badlogin", "1", $expire);
		}
		mysqli_stmt_bind_result($stmt, $uid, $uname, $pass, $fullname, $mobile, $email, $address, $work, $wposition, $wstart, $waddress);
		mysqli_stmt_fetch($stmt);
		$expire=time()+60*60*24*30;
		setcookie("user", $uname, $expire);
	}
	
	$url = "index.php";
	echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
?>