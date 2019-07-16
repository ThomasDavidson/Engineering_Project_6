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
	
	<?php
    //member.php
    include 'php/database.php';
    session_start();
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br /b>";
        $conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');
        $conn->dbConnect();
        echo "<p>Click here to <a href=\"logout.php\">Logout</a></p>";
    } else {
        echo "<p>You must be logged in</p>";
    }
    ?>

    <?php
    if (isset($_SESSION['username'])) {
		
        echo "<h2>Input new data to the database using the form below</h2>
        
		<form action=\"members.php\" method=\"post\" id=\"form\">
            Status: <input type=\"text\" name=\"status\" id=\"inputStatus\"> <br />
            Current Floor: <input type=\"text\" name=\"currentFloor\" id=\"inputRequestedFloor\"> <br />
            Requested Floor: <input type=\"text\" name=\"requestedFloor\" id=\"inputCurrentFloor\"> <br />
            <input type=\"submit\" value=\"Add to Database\"  id=\"submit\" disabled=true>
        </form>";
        
		if (!empty($_POST['status']) && !empty($_POST['currentFloor']) && !empty($_POST['requestedFloor'])) {
            $conn->db->beginTransaction();
            try{            
            $query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestedFloor, otherInfo)
                VALUES(:date,:time,:status,:currentFloor,:requestedFloor,:otherInfo)';
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
                'otherInfo' => 'na'
            ];
            
            if (!$statment->execute($params)) {
                throw new Exception("Error - exeption thrown in try block");
            }
            $conn->db->commit();
        }
        catch (Exception $e){
            $conn->db->rollBack();
        }
            // echo "<br />";
            // $error = $conn->db->errorInfo()[2];
            // var_dump($error);
            // echo "<br />";
        }
        
    }
    ?>

	<h3>Entire content of the elevatorNetwork table<h3>
	
	<?php
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

	<script src="js/memberInput.js"></script>
	
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