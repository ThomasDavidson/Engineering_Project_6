<?php
    //logout.php
    session_start();
    session_destroy();

    echo "You have been logged out. Click <a href='./form.php'> here</a> to log in again"

?>