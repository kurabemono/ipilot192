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
		<h2>New Newsletter</h2>
		<form>
			<label>Title</label>
			<div class="row">
					<div class="large-12 columns">
						<input type="text" placeholder="ex. 2012 July Newsletter" />
					</div>
			</div>
			<label>Body</label>
			<div class="row">
					<div class="large-12 columns">
						<textarea rows="20" placeholder="Write newsletter here.."></textarea>
					</div>
			</div>
		</form>
		<a href="newsletter.php" class="button">Post</a>
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