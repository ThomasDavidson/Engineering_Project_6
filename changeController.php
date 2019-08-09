<?php

	$changeFloorUser = $_SESSION['floorNumber'];

//connects to db
    $db = new PDO(
        'mysql:host=192.168.0.200; dbname=elevator',  //data source
        'ese',                 //username
        'ese'                 //paseword
    );

   // $db->querry("UPDATE carNode SET floorNumber ='$_POST["floor"]' WHERE nodeID ='1'");


    $current = $db->query("Select floorNumber FROM carNode");
    echo "The car is now on floor: ".$_POST["floor"];
    echo "<br />";
    echo "<h3>Database Contents</h3>";
    echo "<h4>Node ID--|-------Info--------------|--Status---|--Floor Number</h4>";
   // $db->query(Select elevatorNodes.nodeID, carNodes.nodeID FROM elevatorNodes LEFT JOIN)
    $rows = $db->query('Select * FROM elevatorNodes ORDER BY nodeID');
    foreach ($rows as $row) { 
        for($i=0;$i <sizeof($row)/2; $i++){
            echo "------";
            echo $row[$i] . "-----| ";
            
        }
        echo "<br />";
        }


 ?>