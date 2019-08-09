<!DOCTYPE html>
<html>

<head>
	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Sign in</title>
	<meta name="description" content="This is the Sign in page for our project" />
	<meta name="robots" content="noindex nofollow" /> <!-- do not want page or any of its links to be indexed -->
	<meta http-equiv="author" content="Damian Scarpone" />
	<meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->


</head>

<body>
	<!-- Container has margins but container-fluid does not -->
	<div class="container-fluid">
		<div class="container-bg">

			<!-- Top of the Page -->
			<div class="row">
				<!-- Container-bg to set background color -->
				<div class="col-md-12">
					<div class="page-header">
						<br>
						<h1 class="text-light"><img src="Images/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
						<h5 class="text-light">By: Thomas, Damian, Robert & Steve</h5>
					</div>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-12">

					<!-- Load the Navigation Bar wit hPHP include function -->
					<?php
					include('include/menu.php');
					?>

				</div>
			</div>

			<div class="row">

				<!-- Main Section -->
				<div class="col-md-10" style='background-color: white'>

				<h2>Change User Password</h2>

				<form id="changePassword" action="changePassword.php" method="post">

					<label for="newPassword">New Password: <abbr title="This field is mandatory">*</abbr></label>
					<input type="password" id="newPassword" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

					<p>Password must contain the following:</p>
					<p id="letterPSWD" class="invalidPSWD">A <b>lowercase</b> letter</p>
					<p id="capitalPSWD" class="invalidPSWD">A <b>capital (uppercase)</b> letter</p>
					<p id="numberPSWD" class="invalidPSWD">A <b>number</b></p>
					<p id="lengthPSWD" class="invalidPSWD">Minimum <b>8 characters</b></p>

					<button>Change Password</button>

				</form>

				<?php
				if (isset($_SESSION['username'])) {
					if (!empty($_POST['newPassword'])){
						include('include/database.php');
						$conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
						$conn->dbConnect();

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
					}
				}else {
					print("<p>You need to be logged in<p>");
				}
				?>

				<script src="js/ValidatePassword.js"></script>

				</div>

				<!-- Second Section, This Column Width Smaller -->
				<div class="col-md-2" style='background-color:white'>
					<div class="row">
						<div class="col-md-12">

							<!-- Load news.php -->

							<?php
							include('include/news.php');
							?>

						</div>
					</div>

					<!-- Scond Section, Part Two --->
					<div class="row">
						<div class="col-md-12" style='background-color: white'>
							<h1>Useful Links</h1>

							<!-- Load links.php -->

							<?php
							include('include/links.php');
							?>

						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="container-bg">
						<p class="text-light text-center">Copyright &copy 2019 Damian Scarpone</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>