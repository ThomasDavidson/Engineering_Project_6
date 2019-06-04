<!DOCTYPE html>
<html>
  
    <head>
    <!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	
	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <title>Forms: Login Registration</title>
        <meta name="description" content="This is the login registration page for our project" />
		<meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
		<meta http-equiv="author" content="Damian Scarpone" />
        <meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->

        <link rel="stylesheet" type="text/css" href="Styles/registration_style.css" />
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
						<h1 class="text-light"><img src="img/CC_logo.jpg" alt="Conestoga College Logo" height="60" wide="60"> Engineering Project 6</h1>
						<h5 class="text-light">By: Thomas, Damien, Robert & Steve</h5>
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

            </div>
        </div>
    </div> 

        <h1>Login Registration</h1>
        <form action="php/request_acc.php" method="post" id="access">
            <fieldset>
                <legend>Contact Details</legend>
                <p><label>First Name: <input type="text" name="firstname" /></label></p>
                <p><label>Last Name: <input type="text" name="lastname" /></label></p>
                <p><label>Email: <input type="email" name="email" /></label></p>
                <p><label>Website: <input type="url" name="url" /></label></p>
                <p><label>Date of Birth: <input type="date" name="birthday" /></label></p>

                <input type="radio" name="fac_or_student" value="faculty" />Faculty
                <input type="radio" name="fac_or_student" value="student" />Student
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
            <textarea>Don't be shy ... </textarea><br />
            <input type="submit" value="Submit Request" />
        </form>

      
        <p>Copyright &copy 2019 Damian Scarpone</p>
    </body>
</html>