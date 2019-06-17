<?php

	session_start(); //start login
	//form subbmitted if inputs not empty
	$submitted = !empty($_POST); 
	if($submitted ==1)
	{
		$username =$_POST['username'];
		$password =$_POST['password'];
	}

	//checks that the form has data - Not just accessing the page
	else
	{
		echo "Bad Login";
	}

	//checks user name and p[assword]
	if($username == 'Bob' && $password == '3')
	{
		$_SESSION['username']=$username;
		echo "Login sucessful:";
		echo "click here to enter the members page <a href=\"members.php\">here</a> </p>";
	}
	//login fails
	else
	{
		echo "invalid credentals, please click <a href=\"form.php\">here</a> to try again </p>";
	}
?>