<?php
session_start();
#mysqli_stmt_bind_result($stmt, $uid, $uname, $password, $fullname, $studentno, $batch, $mobilenumber, $email, $address, $workplace, $wposition, $wstarted, $waddress);
$con = mysqli_connect("localhost","root", "","ipilot");
$username = $_COOKIE['user'];
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$fullname = $_POST["fullname"];
$studentnumber = $_POST["studentnumber"];
$batch = $_POST["batch"];
$mobilenumber = $_POST["mobilenumber"];
$email = $_POST["email"];
$address = $_POST["address"];
$workplace = $_POST["workplace"];
$wposition = $_POST["wposition"];
$wstarted = $_POST["wstarted"];
$waddress = $_POST["waddress"];

$query = sprintf("UPDATE users SET fullname='%s', studentnumber='%s', batch='%s', mobilenumber='%s', email='%s', address='%s', workplace='%s', wposition='%s', wstarted='%s', waddress='%s' WHERE username = '%s'", mysqli_real_escape_string($con, $fullname), mysqli_real_escape_string($con, $studentnumber), mysqli_real_escape_string($con, $batch), mysqli_real_escape_string($con, $mobilenumber), mysqli_real_escape_string($con, $email) ,mysqli_real_escape_string($con, $address), mysqli_real_escape_string($con, $workplace), mysqli_real_escape_string($con, $wposition), mysqli_real_escape_string($con, $wstarted), mysqli_real_escape_string($con, $waddress), $username);

if ($stmt = mysqli_prepare($con, $query)) {
	$s = mysqli_stmt_execute($stmt);
	if (!$s) {
		echo "EDIT FAILURE";
	}
}

$url = "profile.php";
echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
?>