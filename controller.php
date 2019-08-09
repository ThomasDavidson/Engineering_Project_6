<html>

	<?php
	// connect to db
	include 'php/database.php';
	
	session_start();

	$conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
	$conn->dbConnect();

	// tell user what floor it's on 
	if (isset($_SESSION['username'])) { 
    $current = $db->query("Select currentFloor FROM elevatorNetwork");
    echo "The car is now on floor: ".$_POST["floor"];
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

	
</html>


 

