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

$query = "UPDATE users SET fullname=\"" . $fullname .
"\", studentnumber=\"" . $studentnumber .
"\", batch=\"" . $batch . 
"\", mobilenumber=\"" . $mobilenumber .
"\", email=\"" . $email .
"\", address=\"" . $address .
"\", workplace=\"" . $workplace .
"\", wposition=\"" . $wposition .
"\", wstarted=\"" . $wstarted .
"\", waddress=\"" . $waddress . "\"" .
" WHERE username = \"" . $username . "\";";

if ($stmt = mysqli_prepare($con, $query)) {
	$s = mysqli_stmt_execute($stmt);
	if (!$s) {
		echo "EDIT FAILURE";
	}
}

$url = "profile.php";
echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
?>