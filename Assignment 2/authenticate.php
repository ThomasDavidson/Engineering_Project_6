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
						<h1 class="text-light">Assigment 2</h1>
						<h5 class="text-light">By: Stephen Han</h5>
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

        <h1 class="text-muted">Login Registration</h1>
		
		<?php
			include 'database.php';
			session_start();
			
			$username =  $_POST['username'];
			$password = $_POST['password'];
			
			if ($username && $password) {
				
				// connect to MySQL server		
				$conn = new database('127.0.0.1', 'elevator', 'root', '');
				$conn->dbConnect();
												
				$authenticated = FALSE;
				
				$rows = $conn->db->query('SELECT * FROM authorizedUsers ORDER BY id');
					
				foreach ($rows as $row) {
					if ($username == $row[1] && $password == $row[2]) {
						$authenticated = TRUE;
					}
				}
				
				if ($authenticated == TRUE) {
					$_SESSION['username'] = $username; 
					echo "<p>Congraulations, you are now logged into the site.</p>";
					echo "<p>Please click <a href=\"member.php\">here</a></p>";
				} 
				else
				{
					echo "<p>Authentication failed  </p>";
				}				
			}
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
