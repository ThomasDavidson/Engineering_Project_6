<ul class="nav">
	<li class="nav-item">
		<a class="nav-link active" href="index.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="about.php">About Us</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="projectDetails.html">Project Details</a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link" href="documentation.php">Documentation</a>
	</li>

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


	<li class="nav-item">
		<a class="nav-link" href="registration.php">Register</a>
	</li>


	<!-- Secret member lounge -->
	<?php 
		session_start();
		if (isset($_SESSION['username']))
			{
				require 'include/admintools.html';
				echo "	<li class=\"nav-item\">
				<a class=\"nav-link\" href=\"logout.php\">Logout</a>
				</li>";
		

			}else {
				echo "	<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"form.php\">Sign In</a>
					</li>";
			}
	?>

</ul>