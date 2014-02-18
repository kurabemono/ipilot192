<div class="row">
	<div class="large-12 columns">
		<div class="nav-bar right">
			<ul class="button-group">
				<li><a href="index.php" class="small button">Home</a></li>
				<li><a href="newsletter.php" class="small button">Newsletter</a></li>
				<li><a href="donate.php" class="small button">Donate</a></li>
				<?php if (isset($_COOKIE["user"])) { ?>
				<li>
					<a href="profile.php" data-dropdown="hover1" data-options="is_hover:true" class="small button dropdown">Profile</a>
					<ul id="hover1" class="f-dropdown" data-dropdown-content>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
		<h1>iPilot <small>beta 192</small></h1>
		<hr />
	</div>
</div>