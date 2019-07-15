<ul class="nav">
	<li class="nav-item">
		<a class="nav-link active" href="index.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="about.php">About Us</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="html/Project_details.html">Project Details</a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link" href="documentation.php">Documentation</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="registration.php">Register</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="form.php">Sign In</a>
	</li>

	<!-- Secret member lounge -->
	<?php 
		session_start();
		if(null != $_SESSION && $_SESSION['username'] == 'Bob')
			{
				require 'admintools.html';
			}
	?>

	<!-- Drop Down Menu -->
	<li class="nav-item dropdown ml-md-left">
		 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">Logbooks</a>
		<div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownMenuLink">
			 <a class="dropdown-item" href="logbook_damian.php">Damian</a>
			 <a class="dropdown-item" href="logbook_robert.php">Robert</a>
			 <a class="dropdown-item" href="logbook_steve.php">Steve</a>
			 <a class="dropdown-item" href="logbook_thomas.php">Thomas</a>

		</div>
	</li>
</ul>