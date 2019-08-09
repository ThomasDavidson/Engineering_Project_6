<html>
    <head>

        <title>Controller</title>

    </head>
	
    <body>
 	
	<?php
	
	// connect to db
	include 'include/database.php';
	

	$conn = new database('127.0.0.1', 'elevator', 'ese', 'ese');
	
	$conn->dbConnect();

	// tell user what floor it's on 
	
		$current = $conn->db->query("SELECT currentFloor FROM elevatorNetwork WHERE nodeID = 1");
		$val = $current->fetch();
		echo "The car is now on floor:";
		echo $val['currentFloor'];
		echo "<br />";
		
	
	
	?>
	
    <form action= "changeController.php" method="post" id="floor"> 
	
    <p>Enter a floor number to send the elevator to </p>
        <input type="number" name="floorNumber" min="1" max="3"/>
        <input type="submit" value="Send It"/>
	</form>

</body>
    
</html>



 

