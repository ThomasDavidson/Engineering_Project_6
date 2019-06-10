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
    
        <title>Forms: Sign in</title>
        <meta name="description" content="This is the Sign in page for our project" />
		<meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
		<meta http-equiv="author" content="Damian Scarpone" />
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
					include('menu.php');
					?>
						
				</div>
            </div> 
            
            <div class="row">       

    <!-- Main Section --> 
	<div class="col-md-10" style='background-color: white'>	

        <h1 class="text-muted">Login Registration</h1>
        <form action="php/request_acc.php" method="post" id="access">
            <fieldset>
                <legend>Login</legend>
                <p><label>Username: <input type="text" name="username" id='username'/></label></p>
                <p><label>Password: <input type="text" name="password" id='password'/></label></p>
            </fieldset>
			<input class="submit"type="submit" value="Login" />
			<form action="Registration.php">
			<input class="submit"type="submit" value="Request Access" />
			</form>
			<p> Error Messages:</p>
			<p id="feedbacku"></p>
			<p id="feedbackp"></p>
		</form>
		<script src="LoginPage.js"></script>
        </div>
        

        <!-- Second Section, This Column Width Smaller --> 
						<div class="col-md-2" style='background-color:white'>
							<div class="row">
								<div class="col-md-12">
							
						<!-- Load news.php -->
						
									<?php 
									include('news.php');
									?>
						
									</div>
								</div>
							
							<!-- Scond Section, Part Two ---> 
							<div class="row">
								<div class="col-md-12" style='background-color: white'>
								<h1>Useful Links</h1>
								
						<!-- Load links.php -->
						
									<?php 
									include('links.php');
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