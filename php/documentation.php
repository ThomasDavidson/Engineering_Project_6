<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Documentation </title>

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
						
							<h1 class="text-muted">Documentation Related to Project</h1>
							<br>
							
							<h2>Elevator Wiring Details</h2>
							
							<div class="table-responsive">
							<table class="table-wiring table table-borderless">
						
							<thead class="thead-dark">
							
							<tr class="text-center">
							<td>
							<p><strong>From</strong></p>
							</td>
							<td>
							<p><strong>To</strong></p>
							</td>
							<td>
							<p><strong>Note</strong></p>
							</td>
							</tr>
							
							<tr>
							<td colspan="3">
							<p class="text-center"><strong>SWITCH 1</strong></p>
							</td>
							</tr>
							<tr>
							<td>
							<p>800AM A(+)</p>
							</td>
							<td>
							<p>P1-6</p>
							</td>
							<td>
							<p>LED Switch P1+ goes to 800AM A(+)</p>
							</td>
							</tr>
							<tr>
							<td>
							<p>800AM B(-)</p>
							</td>
							
							<td>
							<p>P1 &ndash; 3+2+1</p>
							</td>
							<td>
							<p>LED B(-) goes to Ground</p>
							</td>
							</tr>
							<tr>
							<td>
							<p>800AM - 3</p>
							</td>
							
							<td>
							<p>P1-4</p>
							</td>
							<td>
							<p>Pin 3 from switch goes into P7-6</p>
							</td>
							</tr>
							
							<tr>
							<td>
							<p>800AM - 4</p>
							</td>
							<td>
							<p>P1-3+2+1</p>
							</td>
							<td >
							<p>Pin 4 from Switch goes to ground</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P6-4</p>
							</td>
							<td >
							<p>P7-10</p>
							</td>
							<td >
							<p>Debouncer circuit (U1/IN)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-9</p>
							</td>
							<td >
							<p>STM32 PC01</p>
							</td>
							<td >
							<p>U1/OUT to STM (GPIO INPUT)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P6-5</p>
							</td>
							<td >
							<p>STM32 PB13</p>
							</td>
							<td >
							<p>LED Control Input P1 to PB13</p>
							</td>
							</tr>
							<tr>
							<td colspan="3">
							<p>&nbsp;</p>
							</td>
							</tr>
							<tr>
							<td colspan="3" >
							<p class="text-center"><strong>SWITCH 2</strong></p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM A(+)</p>
							</td>
							<td >
							<p>P2 - 6</p>
							</td>
							<td >
							<p>LED Switch P3+ goes to 800AM A(+)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM B(-)</p>
							</td>
							<td >
							<p>P2 &ndash; 3+2+1</p>
							</td>
							<td >
							<p>LED B(-) goes to Ground</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM - 3</p>
							</td>
							<td >
							<p>P2 - 4</p>
							</td>
							<td >
							<p>N/O Output P2 -&gt; Goes into P7-6</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM - 4</p>
							</td>
							<td >
							<p>P2-3+2+1</p>
							</td>
							<td >
							<p>Pin 4 from Switch goes to ground</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P6-7</p>
							</td>
							<td >
							<p>P7-8</p>
							</td>
							<td >
							<p>Debouncer circuit (U2/IN)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-7</p>
							</td>
							<td >
							<p>STM32 PC02</p>
							</td>
							<td >
							<p>U2/OUT to STM (GPIO INPUT)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P6-8</p>
							</td>
							<td >
							<p>STM32 PB14</p>
							</td>
							<td >
							<p>LED Control Input P2 to PB14</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>&nbsp;</p>
							</td>
							<td >
							<p>&nbsp;</p>
							</td>
							<td >
							<p>&nbsp;</p>
							</td>
							</tr>
							<tr>
							<td colspan="3">
							<p  class="text-center"><strong>SWITCH 3</strong></p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM A(+)</p>
							</td>
							<td >
							<p>P3-6</p>
							</td>
							<td >
							<p>LED Switch P3+ goes to 800AM A(+)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM B(-)</p>
							</td>
							<td >
							<p>P3 &ndash; 3+2+1</p>
							</td>
							<td >
							<p>LED B(-) goes to Ground</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM - 3</p>
							</td>
							<td >
							<p>P3 - 4</p>
							</td>
							<td >
							<p>Pin 3 from switch goes into P7-6</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>800AM - 4</p>
							</td>
							<td >
							<p>P3-3+2+1</p>
							</td>
							<td >
							<p>Pin 4 from Switch goes to ground</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P6-2</p>
							</td>
							<td >
							<p>P7-6</p>
							</td>
							<td >
							<p>Debouncer circuit (U3/IN)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-5</p>
							</td>
							<td >
							<p>STM32 PC03</p>
							</td>
							<td >
							<p>U3/OUT to STM (GPIO INPUT)</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-1</p>
							</td>
							<td >
							<p>STM32 PB15</p>
							</td>
							<td >
							<p>LED Control Input P3 to PB15 &nbsp;</p>
							</td>
							</tr>

							<tr>
							<td colspan="3">
							<p>&nbsp;</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-2</p>
							</td>
							<td >
							<p>STM32 PB10</p>
							</td>
							<td >
							<p>GPIO <strong>OUTPUT </strong>to control the CANBOARD FLR1 LED</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-3</p>
							</td>
							<td >
							<p>STM32 PB11</p>
							</td>
							<td >
							<p>GPIO <strong>OUTPUT </strong>to control the CANBOARD FLR2 LED</p>
							</td>
							</tr>
							<tr>
							<td >
							<p>P7-4</p>
							</td>
							<td >
							<p>STM32 PB12</p>
							</td>
							<td >
							<p>GPIO <strong>OUTPUT </strong>to control the CANBOARD FLR3 LED</p>
							</td>
							</tr> 

							</table>
						</div>
											  
						  <br>
						  <h2> Test Plans </h2>
						  <p><i>Must Have a PDF Viewier</i></p>
					
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