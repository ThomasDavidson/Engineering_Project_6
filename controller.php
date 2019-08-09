<html>
    <head>

        <title>Controller</title>

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
						<h1 class="text-light"><img src="../Images/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
						<h5 class="text-light">By: Thomas, Damian, Robert & Steve</h5>
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
            
    <!-- Main Section --> 
	<div class="col-md-12" style='background-color: white'>	

     <h1 class="text-muted">Members Only Page</h1>
	
	<div>
	
	<?php
	// connect to db
	include 'php/database.php';
	
	session_start();

	$conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
	$conn->dbConnect();

	// tell user what floor it's on 
	if (isset($_SESSION['username'])) { 
	
		echo "Getting the floor number" ;

		$current = $db->query("Select currentFloor FROM elevatorNetwork");
		
		echo "The car is now on floor: ".$_POST["current"];
		echo "<br />";
		
	}
	
	else { 
	
		echo "Username Not Found";
	
	}
	
	?>
	
    <form action= "changeController.php" method="post" id="floor"> 
	
    <p>Enter a floor number to send the elevator to 
        <input type="number" name="floorNumber" min="1" max="3"/>
        <input type="submit" value="Send It"/>
    </p>
	

</body>
    
</html>



 

