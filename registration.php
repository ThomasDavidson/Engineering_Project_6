<!DOCTYPE html>
<html>
  
    <head>
    <!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	
	<!-- Link Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/Registration_style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <title>Forms: Login Registration</title>
        <meta name="description" content="This is the login registration page for our project" />
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
					include('include/menu.php');
					?>
						
				</div>
            </div> 
            
            <div class="row">       

    <!-- Main Section --> 
	<div class="col-md-10" style='background-color: white'>	

        <h1 class="text-muted">Login Registration</h1>
        <form id="reqaccess"action="request_acc.php" method="post" id="access">
            <fieldset>
                <legend>Contact Details</legend>
                <div>
                <p><label>First Name: <input id="fname"type="text" name="firstname" /></label></p>
                <a id="firstnameFeedback"></a>
                </div>
                <div>
                <p><label>Last Name: <input id="lname"type="text" name="lastname" /></label></p>
                <a id="lastnameFeedback"></a>
                </div>
                <div>
                <p><label>Email:<br><input id="email"type="email" name="email" /></label></p>
                <a id="emailFeedback"></a>
                </div>
                <p><label>Website: <input id="site"type="url" name="url" /></label></p>
                <div>
                <p><label>Date of Birth: <input id="birthdate" type="date" name="birthday" /></label></p>
                <a id="birthdateFeedback"></a>
                </div>

                <input type="radio" id="faculty" name="fac_or_student" value="faculty" />Faculty
                <input type="radio" id="student" name="fac_or_student" value="student" />Student
            </fieldset>

            <p>I ... (check all that apply)</p>
            <input type="checkbox" name="involvement" value="none" /> Have no involvement in Project<br />
            <input type="checkbox" name="involvement" value="instructor" /> Am an instructor<br />
            <input type="checkbox" name="involvement" value="student" /> Am a student<br />
            <input type="checkbox" name="involvement" value="admin" /> Am a college Administrator<br />
            <input type="checkbox" name="involvement" value="external" /> Am an external reveiwer<br />
            <input type="checkbox" name="involvement" value="musk" /> Am Elon Musk<br />

            <p>can you do 10 pull-ups?
            <select name="pull-ups">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="five">5</option>
                    <option value="no_answer" selected></option>
            </select>
            </p>
            <p>Tell us why we should give you access to this exclusive website</p>
            <textarea id="message">Don't be shy ... </textarea><br />
            <p id="charactersleft"></p>
            <p id="maxchar"></p>
            <script src="../js/RegistrationPage.js"></script>
            <input class="submit"type="submit" value="Submit Request" />
        </form>
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
                            <footer class="text-light text-center" id='foot'></footer>
							<script src="../js/DateObjectModel.js"></script>
                            </div>
                        </div>
                     </div>
            </div>
        </div>
</body>
    
</html>