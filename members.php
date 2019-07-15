<?php
    //member.php
    include 'php/database.php';
    session_start();

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br /b>";
        $conn = new database('localhost', 'elevator', 'root', '');
        $conn->dbConnect();

        echo "<h3>Entire content of the elevatorNetwork table<h3>";

        $rows = $conn->db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');

        foreach ($rows as $row) {
            for ($i=0; $i < sizeof($row)/2 ; $i++) {
                echo $row[$i];
                echo "  |  ";
            }
            echo "<br />";
        }

        echo "<p>Members only content - for your eyes only</p>";
        echo "<p>Click here to <a href=\"logout.php\">Logout</a></p>";
    }
    else {
        echo "<p>You must be logged in</p>";
    }
?>