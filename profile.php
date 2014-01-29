<?php session_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>iPilot Prototype</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />

  <script src="js/vendor/custom.modernizr.js"></script>

</head>

<body>
<!-- Nav Bar -->

  <?php
	include 'globals.php';
	headerbuttons();
	
  ?>

  <!-- End Nav -->


  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns">
	<?php
		if (isset($_COOKIE['user'])) {
			$username = $_COOKIE['user'];
			$con = mysqli_connect("localhost","root", "","ipilot");
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$query = "SELECT * FROM users WHERE username = \"" . $username . "\"";
			if ($stmt = mysqli_prepare($con, $query)) {
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt, $uid, $uname, $password, $fullname, $studentno, $batch, $mobilenumber, $email, $address, $work, $wposition, $wstarted, $waddress);
				mysqli_stmt_fetch($stmt);
			}
		}
		else {
			$_SESSION['loginrequired'] = 1;
			$url = "index.php";
			echo "<script type=\"text/javascript\">document.location.href=\"" . $url . "\";</script>";
		}
	?>
	  <fieldset>
		<legend>Basic Info</legend>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Name</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $fullname; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Student #</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $studentno; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Batch</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $batch; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Mobile #</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $mobilenumber; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Email Address</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $email; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Address</label>
				</div>
				<div class="large-10 columns">
					<h5><?php echo $address; ?></h5>
				</div>
		</div>
	  </fieldset>
	  
	  <fieldset>
		<legend>Occupation</legend>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Company Name</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $work; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Position</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $wposition; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Employee since</label>
				</div>
				<div class="large-4 columns">
					<h5><?php echo $wstarted; ?></h5>
				</div>
				<div class="large-5 columns">
				</div>
		</div>
		<div class="row">
				<div class="large-2 columns">
					<label class="right inline">Company Address</label>
				</div>
				<div class="large-10 columns">
					<h5><?php echo $waddress; ?></h5>
				</div>
		</div>
	  </fieldset>
	  <a href="edit_profile.php" class="button">Edit</a>
		
		
      
		
    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">
	
	  <?php
		profile();
	  ?>

      <div class="panel">
        <h5>2013 Sept. Top Donors</h5>
        <ol>
		  <li><b>Joshua Nidea</b><br>P50,000</li>
		  <li><b>Joshua Martin Villano</b><br>P30,000</li>
		  <li><b>Dion Melosantos</b><br>P15,000</li>

		</ol>
        <a href="#">More &rarr;</a>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->

  <?php
	footerlinks();
  ?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>