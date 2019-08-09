<html>
    <head>

        <title>Controller</title>

    </head>
	
    <body>

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



 

