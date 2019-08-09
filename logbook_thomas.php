<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Eng Project 6 - Thomas's Logbook</title>
	<meta name="description" content="website description" />
	<meta name="keywords" content="CAN, Elevator, STM32" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="robots" content="noindex nofollow" />

	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href = "css/style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>

  <body>
	
	<!-- Container has margins but container-fluid does not -->
	<div class="container-fluid">
		<div class="container-bg">

		<!-- Top of the Page --> 
			<div class="row" >
		<!-- Container-bg to set background color --> 
				<div class="col-md-12">
					<div class="page-header">
						<br>
						<h1 class="text-light"><img src="Images/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
						<h5 class="text-light">By: Thomas, Damien, Robert & Steve</h5>
					</div>
					</div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-md-12">	

			<!-- Load the Navigation Bar wit hPHP include function --> 
					<?php 
					include('include/menu.php');
					?>
						
				</div>
			</div> 

					<div class="row">
					
					<!-- Main Section --> 
						<div class="col-md-10" style='background-color: white'>	
						
							<h1>Thomas's Log Book</h1>

							<h2>Week 1</h2>
							<ul>
								<li>Test Plan</li>
								<li>Website</li>
								<ul>
									<li>Log Book</li>
									<li>About page</li>
									<li>Test Plan</li>
								</ul>
							</ul>
							<h2>Week 2</h2>
							<ul>
								<li>Test Plan</li>
								<li>Assignment 1 Q#1-5</li>
							</ul>
							<h2>Week 3</h2>
							<ul>
								<li>Test Elevator CAN Buss</li>
								<li>Organize Repository</li>
							</ul>
							<h2>Week 4</h2>
							<ul>
								<li>Added code for the elevators inside buttons</li>
								<li>Help complete elevator wiring</li>
							</ul>
							<h2>Week 5</h2>
							<ul>
								<li>Software Engineering Assignment #1</li>
							</ul>
							<h2>Week 6</h2>
							<ul>
								<li>Worked on CSS</li>
							</ul>
							<h2>Week 7</h2>
							<ul>
								<li>Members.php</li>
							</ul>
							<h2>Week 8</h2>
							<ul>
								<li>Updated members.php with </li>
							</ul>
							<h2>Week 9</h2>
							<ul>
								<li>Started integrating mysql with php</li>
								<li>Reading elevatorNetwork from MYSQL</li>
							</ul>
							<h2>Week 10</h2>
							<ul>
								<li>Updated login with MYSQL</li>
							</ul>
							<h2>Week 11</h2>
							<ul>
								<li>Updated elevatorNetwork medification from website</li>
							</ul>
							<h2>Week 12</h2>
							<ul>
								<li>Updated menu bar</li>
							</ul>
							<h2>Week 13</h2>
							<ul>
								<li>Controbuted to change password page</li>
								<li>Added change user page</li>

							</ul>
							<h2>Week 14</h2>
							<ul>
								<li>Integrated SQL connector to website</li>
							</ul>

							
						</div>
						
						<!-- Second Section, This Column Width Smaller --> 
						<div class="col-md-2" style='background-color:white'>
							<div class="row">
								<div class="col-md-12">
							
						<!-- Load news.php -->
						
									<?php 
									include('include/news.php');
									?>
						
									</div>
								</div>
							
							<!-- Scond Section, Part Two ---> 
							<div class="row">
								<div class="col-md-12" style='background-color: white'>
								<h1>Useful Links</h1>

									<!-- Load links.php -->
						
									<?php 
									include('include/links.php');
									?>
									
						</div>
					</div>
					</div>
				<!-- Footer Section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="container-bg">
							<!-- Footer Code with start year -->
							
							<footer class="text-light text-center" id='foot'></footer>
							<script src="js/DateObjectModelT.js"></script>
							
							</div>
						</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
  </body>
</html>