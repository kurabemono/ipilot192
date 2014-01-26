<?php

function headerbuttons() {
	echo "<div class=\"row\">
		<div class=\"large-12 columns\">
		  <div class=\"nav-bar right\">
		   <ul class=\"button-group\">
			 <li><a href=\"index.php\" class=\"button\">Home</a></li>
			 <li><a href=\"profile.php\" class=\"button\">Profile</a></li>
			 <li><a href=\"newsletter.php\" class=\"button\">Newsletter</a></li>
			 <li><a href=\"donate.php\" class=\"button\">Donate</a></li>
			</ul>
		  </div>
		  <h1>iPilot <small>beta</small></h1>
		  <hr />
		</div>
	  </div>";
}

function footerlinks() {
	echo "<footer class=\"row\">
    <div class=\"large-12 columns\">
      <hr />
      <div class=\"row\">
        <div class=\"large-6 columns\">
          <p>&copy; Copyright 2013 iPilot. Template by ZURB</p>
        </div>
        <div class=\"large-6 columns\">
          <ul class=\"inline-list right\">
            <li><a href=\"http://solamocs191.wikispaces.com/-/iPilot/Team%201/\">About Us</a></li>
            <li><a href=\"mailto:staff@ipilot.com\">Contact us</a></li>
            <li><a href=\"validate.php\">Validate Donations</a></li>
			<li><a href=\"donationhistory.php\">View Donations</a></li>
            <li><a href=\"postnewsletter.php\">Post Newsletter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>";
}

function profile() {
	if (isset($_COOKIE["user"])) {
		$username = $_COOKIE["user"];
		$con = mysqli_connect("localhost","root", "","ipilot");
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
		$query = "SELECT * FROM users WHERE username = \"" . $username . "\"";
		if ($stmt = mysqli_prepare($con, $query)) {
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $col1, $col2, $fullname);
			mysqli_stmt_fetch($stmt);
		}
		echo "<div align=\"center\">
	    <img src=\"http://placehold.it/150x150&text=" . $col1 . "\" /><br>
		<b><a href=\"#\" align=\"right\">" . $fullname ."</a></b>
      </div>
	  
      <ul class=\"side-nav\" align=\"right\">
        <li><a href=\"edit_profile.php\">Edit Profile</a></li>
        <li><a href=\"logout.php\">Logout</a></li>
      </ul>";
	}
	else {
		echo "<div class=\"panel\"><form action=\"login.php\" method=\"post\">
		<div class=\"row\">";
		
		if (isset($_COOKIE["badlogin"])) {
			if ($_COOKIE["badlogin"] == "1") {
				echo "<div data-alert class=\"alert-box alert\">
				  Invalid username/password
				  <a href=\"#\" class=\"close\">&times;</a>
				</div>";
			}
			setcookie("badlogin", "", time() - 3600);
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
		<input type=\"submit\" class=\"small button\">
		</div>
		</form>";
	}
}

?>