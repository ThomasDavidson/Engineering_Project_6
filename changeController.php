<?php

	include 'include/database.php';
	
	session_start();


	//connects to db
	$conn = new database('127.0.0.1', 'elevator', 'ese', 'ese');
	$conn->dbConnect();
	
	// user floor number
	$changeFloorNumber = $_post['floorNumber'];

	try { 	
		// Begin a transaction
		$conn->db->beginTransaction();
		
	    // prepare query 
		$query = "UPDATE elevatorNetwork"."SET currentFloor = $changeFloorNumber". "WHERE nodeID = 1";
		
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