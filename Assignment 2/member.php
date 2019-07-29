<html>
  
    <head>
    <!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	
	<!-- Link Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <title>Forms: Sign in</title>
        <meta name="description" content="This is the Sign in page" />
		<meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
		<meta http-equiv="author" content="Stephen Han" />
        <meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->

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
    include 'database.php';
	
    session_start();
	
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br /b>";
		$conn = new database('127.0.0.1', 'elevator', 'root', '');
        $conn->dbConnect();
		
    } else {
        echo "<p>You must be logged in</p>";
    }
    ?>
	<br />

	<h2>Change User Password</h2>
		
		<form id="changePassword" action="../changePassword.php" method="post">		
		
		  <label for="newPassword">New Password: <abbr title="This field is mandatory">*</abbr></label>
		  <input type="password" id="newPassword" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			
		  <p align="center">Password must contain the following:</p>
			  <p align="center" id="letterPSWD" class="invalidPSWD">A <b>lowercase</b> letter</p>
			  <p align="center" id="capitalPSWD" class="invalidPSWD">A <b>capital (uppercase)</b> letter</p>
			  <p align="center" id="numberPSWD" class="invalidPSWD">A <b>number</b></p>
			  <p align="center" id="lengthPSWD" class="invalidPSWD">Minimum <b>8 characters</b></p>
	
		<button>Change Password</button>
		
		</form>
	
	<script src="js/ValidatePassword.js"></script>
	
	<br />

    <?php
    if (isset($_SESSION['username'])) {
		
        echo "<h2>Input new data to the database using the form below</h2>
        
		<form action=\"member.php\" method=\"post\" id=\"form\">
            Status: <input type=\"text\" name=\"status\" id=\"inputStatus\"> <br />
            Current Floor: <input type=\"text\" name=\"currentFloor\" id=\"inputRequestedFloor\"> <br />
            Requested Floor: <input type=\"text\" name=\"requestedFloor\" id=\"inputCurrentFloor\"> <br />
            <input type=\"submit\" value=\"Add to Database\"  id=\"submit\" disabled=false>
        </form>";
        
		if (!empty($_POST['status']) && !empty($_POST['currentFloor']) && !empty($_POST['requestedFloor'])) {
			
            $conn->db->beginTransaction();
            
			try{            
				$query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestFloor)
					VALUES(:date,:time,:status,:currentFloor,:requestedFloor)';
				$statment = $conn->db->prepare($query);
				$curr_date_query = $conn->db->query('SELECT CURRENT_DATE()');
				$curr_date = $curr_date_query->fetch(PDO::FETCH_ASSOC);
				$curr_time_query = $conn->db->query('SELECT CURRENT_TIME()');
				$curr_time = $curr_time_query->fetch(PDO::FETCH_ASSOC);
				$status = $_POST['status'];
				$currentFloor = $_POST['currentFloor'];
				$requestedFloor = $_POST['requestedFloor'];
				$params = [
					'date' => $curr_date['CURRENT_DATE()'],
					'time' => $curr_time['CURRENT_TIME()'],
					'status' => $status,
					'currentFloor' => $currentFloor,
					'requestedFloor' => $requestedFloor,
				];
				
				if (!$statment->execute($params)) {
					throw new Exception("Error - exeption thrown in try block");
				}
				$conn->db->commit();
					
        }
        catch (Exception $e){
            $conn->db->rollBack();
        }
			
			// Copy the NodeID, Status, Requested Floor into elevatorLog
			
		    $conn->db->beginTransaction();
			
			try {
				$query = ('SELECT t1.nodeID, t1.status, t1.requestedFloor, t2.lognodeID, t2.logStatus, t2.logFloor
				           FROM elevatorNetwork t1 LEFT JOIN elevatorLog t2 ON t1.nodeID = t2.lognodeID');
				
				$query->execute();
			
				if (!$statement->execute()) {
                throw new Exception("Error - exeption thrown in try block");
            }
			
				$conn->db->commit();
	
			}
			
			catch (Exception $e){
			echo "Left Join Failed";
            $conn->db->rollBack();
			}
			
        }
        
    }
    ?>

	<br />


		
	<?php
	echo"<h2>Entire content of the elevatorNetwork table</h2>";
	
	if (isset($_SESSION['username'])) {
		$rows = $conn->db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
		foreach ($rows as $row) {
			for ($i = 0; $i < sizeof($row) / 2; $i++) {
				echo $row[$i];
				echo "  |  ";
			}
			echo "<br />";
		}
		}
	?>
	
	<br />


	
	<?php
	echo"<h2>Diagnostic Information<h2>";
	
	
	if (isset($_SESSION['username'])) {
		
		// Count the # of times the status field changed for each nodeID 
		$rows = $conn->db->query('SELECT logTime, logNodeID, COUNT(*) AS hits FROM elevatorLog GROUP BY logTime');
			
		echo "<br />";
	
		echo "<table border='1'>";
		
		echo "<td>Time</td> ";
		
		echo "<td>nodeID</td> ";

		echo "<td># of hits</td> ";

		echo "<tr> </tr> ";

		foreach ($rows as $row) {
			for ($i = 0; $i < sizeof($row) / 2; $i++) {
				echo "<td>" . $row[$i] . "</td>";
			}
				echo "<tr> </tr>";
		}
		
	echo "</table>";

	echo "<br />";

	echo "<table border='1'>";
	
	echo "<td>Time</td> ";
	
	echo "<td>Status ID</td> ";

	echo "<tr> </tr> ";
		
	// Show the Status Information
	$rows = $conn->db->query('SELECT logTime, logStatus FROM elevatorLog');
		
	foreach ($rows as $row) {
			for ($i = 0; $i < sizeof($row) / 2; $i++) {
				echo "<td>" . $row[$i] . "</td>";
			}
			echo "<tr> </tr>";
		}
		echo "</table>";	
		
	}
	
	echo "<br />";
	
	echo"<h3>Click <a href='Logout.php'>here</a>  to Log Out</h3>";

	?>
		
	</div>
       
		<div class="row">
			<div class="col-md-12 text-center">
                            <footer class="text-light" id='footer'></footer>
							<script src="../js/DateObjectModel.js"></script>
                            </div>
                        </div>
                     </div>
		  </div>
</body>
    
</html>