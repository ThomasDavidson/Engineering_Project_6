<?php
	$username = $_SESSION['username'];
	$newpassword = $_POST['newPassword'];

		

	// Try updating password
	try{ 
		
		echo "Changing Password for User:, " . $_SESSION['username'] . "!<br /b>";

		// Find the username
		$query = $conn->db->prepare('SELECT * FROM authorizedUsers WHERE username = :username');
		
		$query->bindParam(':username', $username);
		
		$query->execute();
		
		// Username is found - update the password
			if($query->rowCount() != 0){
			
			// Begin a transaction
			$conn->db->beginTransaction();
				
			$query = 'UPDATE authorizedUsers
					  SET Password = :Password
					  WHERE Username = :Username';
					  
			$statement = $conn->db->prepare($query);

			$statement->bindValue('Password', $newpassword);
			$statement->bindValue('Username', $username);
			
			 if (!$statement->execute()) {
                throw new Exception("Error - exeption thrown in try block");
            }
			
			// Commit the transaction
            $conn->db->commit();			
			echo "<p>Updated Password</p>" ;
			} 
			
			
			else { 
				echo "Username Not Found";
				
				// Rollback the transaction
				$conn->db->rollBack();
			}
	}
	
	// Recognize mistake and roll back changes
	catch (Exception $e){
		echo"<p>Failed to update password</p>";
		
		$conn->db->rollBack();
	}
?>
