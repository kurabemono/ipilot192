<?php
if (isset($_COOKIE["user"])) {
	$username = $_COOKIE["user"];
	$con = mysqli_connect("localhost","root", "","ipilot");
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$query = "SELECT username, fullname FROM users WHERE username = \"" . $username . "\"";
	if ($stmt = mysqli_prepare($con, $query)) {
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $uname, $fullname);
		mysqli_stmt_fetch($stmt);
	}
	echo "<div align=\"center\">
	<img src=\"http://placehold.it/150x150&text=" . $uname . "\" /><br>
	<b><a href=\"profile.php\" align=\"right\">" . $fullname ."</a></b>
  </div>
  
  <ul class=\"side-nav\" align=\"right\">
	<li><a href=\"edit_profile.php\">Edit Profile</a></li>
	<li><a href=\"logout.php\">Logout</a></li>
  </ul>";
}
else {
	echo "<div class=\"panel\"><form action=\"authenticate.php\" method=\"post\">
	<div class=\"row\">";
	
	if (isset($_SESSION['badlogin'])) {
		echo "<div data-alert class=\"alert-box alert\">
		  Invalid username/password
		  <a href=\"#\" class=\"close\">&times;</a>
		</div>";
		unset($_SESSION['badlogin']);
	}
	
	if (isset($_SESSION['loginrequired'])) {
		echo "<div data-alert class=\"alert-box alert\">
		  Please login first
		  <a href=\"#\" class=\"close\">&times;</a>
		</div>";
		unset($_SESSION['loginrequired']);
	}
	
	if (isset($_SESSION['logoutsuccess'])) {
		echo "<div data-alert class=\"alert-box success\">
		  Successfully logged out
		  <a href=\"#\" class=\"close\">&times;</a>
		</div>";
		unset($_SESSION['logoutsuccess']);
	}
	
	echo "<div class=\"large-12 columns\">
			<input type=\"text\" name=\"username\" placeholder=\"Username\" />
		</div>
	</div>
	<div class=\"row\">
		<div class=\"large-12 columns\">
			<input type=\"password\" name=\"password\" placeholder=\"Password\" />
		</div>
	</div>
	<input type=\"submit\" value=\"Login\" class=\"small button\">
	</div>
	</form>";
}
?>