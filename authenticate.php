<?php

	$submitted = !empty($_POST); //form subbmitted if inputs not empty
	
	if($submitted ==1)
	{
		session_start(); //start login
		$username =$_POST['username'];
		$password =$_POST['password'];


		echo "<p>Form submitted right (1 for true): $submitted</p>";
		echo "<p>Username sent $username </p>";
		echo "<p>Password sent $password </p>";
	}
	
	//checks that the form has data - Not just accessing the page
	else
	{
		echo "Bad Login";
	}

	if($username&&$password)
	{
		$_SESSION['username']=$username;
		echo ""
	}
	
?>