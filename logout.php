<?php
    if(isset($_SESSION['username']))
    {
        if(($_SESSION['username'] != Bob))
        {
            echo "You are not logged in";
            echo "<a href='logout.php'>Click to return home</a>";
        }
        else
        {
            session_start();
            session_destroy();
            echo"you're now logged out\n";
            echo "<a href='index.php'>Click to return home</a>";
        } 
    }
    else
    {
        echo "You are not logged in";
        echo "<a href='index.php'>Click to return home</a>";
    }
?>
