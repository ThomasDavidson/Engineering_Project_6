<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logbook | Robert</title>

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
						<a href ="https://www.conestogac.on.ca/" >
						<h1 class="text-light"><img src="Images/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
							</a>
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
						
							<h1 class="text-muted">Robert's Logbook</h1>
							<br>
							
							<figure>
							<img src="Images/Robert.jpg" alt="image of Robert"	title="Robert" width="200px" />
							</figure>
							
							<br>
							
							<h2>Week 1</h2>
							<ul>
								<li>Test Plan</li>
								<li>Website html</li>
							</ul>
							
							<h2>Week 2</h2>
							<ul>
								<li> Worked on elivator programming</li>
								<li> setup Git </li>
							</ul>
					
							<h2>Week 3</h2>
							<ul>
								<li> worked on setting up the pi</li>
								<li> Build at least one floor node and program it to call elevator to one of the floors at the press of a button and to display the floor number that the elevator is curently on</li>
								<li> data com assignment 2 </li>
							</ul>
							
							<h2>Week 4</h2>
							<ul>
								<li> Did Data Lab </li>
								<li> Successfully wired the elevator floors and master floor node</li>
								<li> Assisted with programming the elevator </li>
								<li> established coding standards  </li>


							</ul>
							
							<h2>Week 5</h2>
							<ul>
								<li> In Progress</li>
							</ul>
							<a class="top-link" href="logbook_robert.php">Top of Page</a>
						
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
								<div class="col-md-12" style='background-color: 0x55'>
								<h1>Useful Links</h1>
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
							<script src="js/DateObjectModelR.js"></script>
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