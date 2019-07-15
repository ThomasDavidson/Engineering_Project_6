<?php
include 'php/database.php';

session_start();
$username =  $_POST['username'];
$password = $_POST['password'];

echo "<p>Username: $username</p>";
echo "<p>Password: $password</p>";

if ($username && $password) {
    //connects to database
    $conn = new database('192.168.0.200', 'elevator', 'root', '3Yn4$zT&');

    $conn->dbConnect();



    $query = "SELECT * FROM authorizedUsers WHERE username='$username' AND password='$password'";


    $rows = $conn->db->query($query);

    $user = $rows->fetch();

    if ($rows->rowCount() == 1) {
        if (($user['username'] == $username) && ($user['password'] == $password)) {
            $_SESSION['username'] = $username;
            echo "<p>Congradulations, you are now logged into the site.</p>";
            echo "<p>Please click <a href=\"members.php\">here</a></p>";
        }
    } else {
        echo "<p>Authentication failed  </p>";
    }

    echo "<b /><b />";
}

?>