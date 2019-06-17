<ul class="nav">
	<li class="nav-item">
		<a class="nav-link active" href="index.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="about.php">About Us</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="html/Project_details.html" target="_blank">Project Details</a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link" href="documentation.php" target="_blank">Documentation</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="registration.php" target="_blank">Register</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="form.php" target="_blank">Sign In</a>
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
			 <a class="dropdown-item" href="../php/logbook_damian.php" target="_blank">Damian</a>
			 <a class="dropdown-item" href="../php/logbook_robert.php" target="_blank">Robert</a>
			 <a class="dropdown-item" href="../php/logbook_steve.php" target="_blank">Steve</a>
			 <a class="dropdown-item" href="../php/logbook_thomas.php" target="_blank">Thomas</a>

		</div>
	</li>
</ul>