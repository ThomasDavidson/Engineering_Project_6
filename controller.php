<html>

	<?php
	// connect to db
	include 'php/database.php';
	
	$conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
	$conn->dbConnect();

	// tell user what floor it's on 
    $current = $db->query("Select currentFloor FROM elevatorNetwork");
    echo "The car is now on floor: ".$_POST["floor"];
    echo "<br />";
	
	?>
	
    <form action= "changeController.php" method="post" id="floor"> 
    <p>Enter a floor number to send the elevator to 
        <input type="number" name="floorNumber" min="1" max="3"/>
        <input type="submit" value="Send It"/>
    </p>

	
</html>


 

