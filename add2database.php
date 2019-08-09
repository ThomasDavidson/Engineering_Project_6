<?php
	
	// connect to MySQL server
	//checks login
if (isset($_SESSION['username'])) {
	include 'database.php';
	
	$conn = new database('127.0.0.1', 'elevator', 'root', '');
	$conn->dbConnect();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	
	$query = $conn->db->prepare('SELECT * FROM authorizedUsers WHERE username = :username');
	$query->bindParam(':username', $username);
	$query->execute();

	if($query->rowCount() == 0){
		
		echo "Username is Unique";
				
		$query = 'INSERT INTO authorizedUsers (Username, Password, Firstname, Lastname)
                VALUES(:Username,:Password,:Firstname,:Lastname)';
        
        $statement = $conn->db->prepare($query);
		
		$params = [
				'Username' => $username,
				'Password' => $password,
				'Firstname' => $firstname,
				'Lastname' => $lastname
			];
		
		$result = $statement->execute($params);
		
		echo "<p>Added to Table</p>" ;
			
	} else { 
	
	  echo "Username Taken";
	  
	}
}
?>