<?php
	$submitted = !empty($_POST); //form subbmitted if inputs not empty
	$firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $website =$_POST['url'];
    $birthdate =$_POST['birthday'];
    $importance =$_POST['fac_or_student'];
  
    
	echo "<p>Form submitted right (1 for true): $submitted</p>";
	echo "<p>First name sent $firstname </p>";
	echo "<p>Last name sent $lastname </p>";
    echo "<p>email sent $email </p>";
    echo "<p>website $website </p>";
    echo "<p>birthdate $birthdate </p>";

    if($importance =="student"){
        echo "<p>not important to the school  </p>";
    }
    else
    echo"<p> you are important to the school</p>";
    

?>