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
		include 'nav/header.php';
	?>

  <!-- End Nav -->


  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns">
		<form>
		  <fieldset>

			<legend>Basic Info</legend>

			<label>Name</label>
			<div class="row">
				<div class="large-4 columns">
					<input type="text" placeholder="Given Name" value="asdf"/>
				</div>
				<div class="large-4 columns">
					<input type="text" placeholder="Middle Name" />
				</div>
				<div class="large-4 columns">
					<input type="text" placeholder="Family Name" />
				</div>
			</div>
			
			<div class="row">
				<div class="large-2 columns">
					<label>Batch</label>
					<input type="text" placeholder="ex. 2010" />
				</div>
				<div class="large-3 columns">
					<label>Mobile Number</label>
					<input type="text" placeholder="ex. 09171234567" />
				</div>
				<div class="large-7 columns">
					<label>E-mail Address</label>
					<input type="text" placeholder="ex. liL_mhalDitA@yahoo.com" />
				</div>
			</div>
			<label>Student #</label>
			<div class="row">
				<div class="large-3 columns">
					<input type="text" placeholder="ex. 2009-01234" />
				</div>
			</div>

			<label>Address</label>
			<input type="text" />

		  </fieldset>
		  
		  <fieldset>

			<legend>Occupation</legend>

			<label>Company Name</label>
			<div class="row">
				<div class="large-12 columns">
					<input type="text" />
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns">
					<label>Position</label>
					<input type="text" placeholder="ex. Programmer, QC, etc." />
				</div>
				<div class="large-7 columns">
					
				</div>
			</div>
			<label>Employee since</label>
			<div class="row">
				<div class="large-2 columns">
					<input type="text" placeholder="ex. 2007" />
				</div>
			</div>

			<label>Company Address</label>
			<input type="text" />

		  </fieldset>
		</form>
		
		<a href="profile.php" class="button">Save</a>
		<a href="profile.php" class="button">Cancel</a>
		
		
      
		
    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">
	
		<?php
			include 'nav/sidebar_miniprofile.php';
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
	include 'nav/footer.php';
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