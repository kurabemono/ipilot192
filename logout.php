<?php
	session_start();
	setcookie("user", "", time() - 3600);
	$_SESSION['logoutsuccess'] = 1;
	$url = "index.php";
	echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
?>