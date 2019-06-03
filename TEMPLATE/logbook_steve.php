<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logbook | Steve</title>

	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	
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
						<h1 class="text-light"><img src="img/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
						<h5 class="text-light">By: Thomas, Damien, Robert & Steve</h5>
					</div>
					</div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-md-12">	

			<!-- Load the Navigation Bar wit hPHP include function --> 
					<?php 
					include('menu.php');
					?>
						
				</div>
			</div> 

					<div class="row">
					
					<!-- Main Section --> 
						<div class="col-md-10" style='background-color: white'>	
						
							<h1 class="text-muted">Steve's Logbook</h1>
							<br>
							
							<figure>
							<img src="img/steve.jpg" alt="image of Steve"	title="Steve" width="200px" />
							</figure>
							
							<br>
							
							<h2>Week 1</h2>
							<ul>
								<li>Test Plan</li>
								<li>Website</li>
							</ul>
							
							<h2>Week 2</h2>
							<ul>
								<li> Genearated schematic diagrams for the floor nodes and the elevator car controller</li>
								<li> Used Microsoft Project to create a WBS </li>
								<li> Uploaded Dates into Google Calendar </li>
							</ul>
					
							<h2>Week 3</h2>
							<ul>
								<li> Started work on moving the website  to Bootstrap </li>
								<li> Build at least one floor node and program it to call elevator to one of the floors at the press of a button and to display the floor number that the elevator is curently on</li>
								<li> Software Assignment #1 Question #7,10</li>
							</ul>
							
							<h2>Week 4</h2>
							<ul>
								<li> Did Data Lab </li>
								<li> Successfully wired the elevator floors and master floor node</li>
								<li> Assisted with programming the elevator </li>
								<li> Implemented PHP and Java into the website  </li>


							</ul>
							
							<h2>Week 5</h2>
							<ul>
								<li> In Progress</li>
							</ul>
							
						</div>
						
						<!-- Second Section, This Column Width Smaller --> 
						<div class="col-md-2" style='background-color:white'>
							<div class="row">
								<div class="col-md-12">
							
						<!-- Load news.php -->
						
									<?php 
									include('news.php');
									?>
						
									</div>
								</div>
							
							<!-- Scond Section, Part Two ---> 
							<div class="row">
								<div class="col-md-12" style='background-color: white'>
								<h1>Useful Links</h1>
								<ul>
								  <li><a href="#">Our Youtube Channel</a></li>
								  <li><a href="#">Our Github Repository</a></li>
								  <li><a href="#">link 3</a></li>
								  <li><a href="#">link 4</a></li>
								</ul>
								</div>
							</div>
						</div>
					</div>
					
				<!-- Footer Section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="container-bg">
							<!-- Footer Code with start year -->
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