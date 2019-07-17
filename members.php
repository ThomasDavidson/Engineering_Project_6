<html>

<head>
    <title>Member Only Page</title>
</head>

<body>

    <?php
    //member.php
    include 'php/database.php';
    session_start();

    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br /b>";
        $conn = new database('localhost', 'elevator', 'root', '');
        $conn->dbConnect();

        echo "<p>Members only content - for your eyes only</p>";
        echo "<p>Click here to <a href=\"logout.php\">Logout</a></p>";
    } else {
        echo "<p>You must be logged in</p>";
    }
    ?>

    <h2>Input new data to the database using the form below</h2>
    <form action="members.php" method="post" id="form">
        Status: <input type="text" name="status" id="inputStatus"> <br />
        Current Floor: <input type="text" name="currentFloor" id="inputRequestedFloor"> <br />
        Requested Floor: <input type="text" name="requestedFloor" id="inputCurrentFloor"> <br />
        <input type="submit" value="Add to Database"  id="submit" disabled=true>
    </form>

    <?php
    if (isset($_SESSION['username'])) {
        if (!empty($_POST['status']) && !empty($_POST['currentFloor']) && !empty($_POST['requestedFloor'])) {
            $query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestedFloor, otherInfo)
                VALUES(:date,:time,:status,:currentFloor,:requestedFloor,:otherInfo)';
            $statment = $conn->db->prepare($query);

            $curr_date_query = $conn->db->query('SELECT CURRENT_DATE()');
            $curr_date = $curr_date_query->fetch(PDO::FETCH_ASSOC);

            $curr_time_query = $conn->db->query('SELECT CURRENT_TIME()');
            $curr_time = $curr_time_query->fetch(PDO::FETCH_ASSOC);

            $status = $_POST['status'];
            $currentFloor = $_POST['currentFloor'];
            $requestedFloor = $_POST['requestedFloor'];

            $params = [
                'date' => $curr_date['CURRENT_DATE()'],
                'time' => $curr_time['CURRENT_TIME()'],
                'status' => $status,
                'currentFloor' => $currentFloor,
                'requestedFloor' => $requestedFloor,
                'otherInfo' => 'na'
            ];

            $result = $statment->execute($params);

            // echo "<br />";
            // $error = $conn->db->errorInfo()[2];
            // var_dump($error);
            // echo "<br />";
        }

        
    } else {
        echo "<p>You must be logged in</p>";
    }
    ?>

    <h3>Entire content of the elevatorNetwork table<h3>

    <?php
    $rows = $conn->db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');

    foreach ($rows as $row) {
        for ($i = 0; $i < sizeof($row) / 2; $i++) {
            echo $row[$i];
            echo "  |  ";
        }
        echo "<br />";
    }

    ?>

<script src="js/memberInput.js"></script>
</body>

</html>