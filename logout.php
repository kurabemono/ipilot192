<?php
	setcookie("user", "", time() - 3600);
	$url = "index.php";
	echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
?>