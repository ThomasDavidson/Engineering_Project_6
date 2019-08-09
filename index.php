<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome</title>

	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	
	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
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
						<h5 class="text-light">By: Thomas, Damian, Robert & Steve</h5>
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
						
							<h1 class="text-muted">Welcome to the Elevator Project Homepage</h1>
							
							<br>

							<figure>
							<img src="Images/logo.jpg" alt="Team Logo(Larry)"	title="Larry" width="200" />
									<figcaption><H2>Team Larry</H2></figcaption>
							</figure>
							
							<br>
							
							
							<h2>Members</h2>
															
							<ol>
								<li><p>Damian 
								<a href = "https://www.linkedin.com/in/damian-scarpone-496b57130/" target="_blank" class="fa fa-linkedin-square"></a></li></p>

								<li><p>Steve
								<a href = "https://www.linkedin.com/in/stephen-han-692a2445/" target="_blank" class="fa fa-linkedin-square"></a></li></p>

								<li><p>Robert
								<a href = "https://www.linkedin.com/in/rboettcher/" target="_blank" class="fa fa-linkedin-square"></a></li></p>

								<li><p>Thomas 
								<a href = "https://www.linkedin.com/in/thomas-davidson-661ab7115/" target="_blank" class="fa fa-linkedin-square"></a></li></p>

							</ol>
							
							<br>
							<br>
							
							<h2>Team Video</h2>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/MxT51bvUyhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							<br>
							<br>
							
							<h2>Gantt Chart</h2>

					<!-- Have a Table that wraps --> 
						<?php 
						include('php/chart.php');
						?>
						
						</DIV>
						
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
									include('php/links.php');
									?>
						
								</div>
							</div>
						</div>
					</div>
					
				<!-- Footer Section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="container-bg">
							<p class="text-light text-center">&copy; Copyright 2014-<script>document.write(new Date().getFullYear())</script></p>
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