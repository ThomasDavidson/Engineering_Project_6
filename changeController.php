<?php

	include 'php/database.php';
	
	//connects to db
	$conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
	$conn->dbConnect();
	
	// user floor number
	$changeFloorNumber = $_SESSION['floorNumber'];

	try { 
	
		// Begin a transaction
		$conn->db->beginTransaction();
		
	    // prepare query 
		$query = 'UPDATE elevatorNetwork SET currentFloor = :changeFloorNumber
				  WHERE nodeID = 1';
		
		// run query 
		$statement = $conn->db->prepare($query);
					
		echo"<p>Successfully changed floor number</p>";

	}
	
	// Recognize mistake and roll back changes
	catch (Exception $e){
		echo"<p>Failed to change floor number</p>";
		
		$conn->db->rollBack();
	}


 ?>