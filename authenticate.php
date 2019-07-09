<?php

    //Checks authorized users table in elevator database for matching username and password
    function loginQuery($authorizedUsers, $username, $password)
    {
        foreach ($authorizedUsers as $user) {
            if ( ($user['username'] == $username) && ($user['password'] == $password)) {
                //returns 1 if username and password match an authorized user
                return 1;
            }
        }
        return 0;
        //returns 0 if username and password does not match an authorized user
	}


    session_start();
    $username =  $_POST['username'];
    $password = $_POST['password'];

    if ($username&&$password) {
        //connects to database
        $db = new PDO(
            'mysql:host=localhost;dbname=elevator',
            'root',
            ''
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = "select * from authorizedUsers where username='$username'" ;

    
        $rows = $db->query($query);

        // var_dump($rows->fetchAll());

        echo "<b /><b />";

        if (loginQuery($rows, $username, $password) == 1) {
            $_SESSION['username']=$username;
            echo "<p>Congradulations, you are now logged into the site.</p>";
            echo "<p>Please click <a href=\"members.php\">here</a></p>";
        }else {
            echo "<p>Authentication failed  </p>";
        }
    }
?>