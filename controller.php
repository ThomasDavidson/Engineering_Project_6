<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control Panel</title>
        <link rel="stylesheet" type="text/css" href="css/controller.css">
        <div style background-image url(Images/logo.jpg); </div>
    </head>

    <body>
        <div id="current" > Current Floor </div> 
        <div id="floor"> First Floor </div>
        <div id="floor"> Second Floor </div>
        <div id="floor"> Third Floor </div>
    </body>

</html>

<html> 
 <title>Quiz 2</title>
 <body>
 <h1>Welcome to the Members only page</h1>
 

<form action= "?" method="post" id="floor"> 
    <p>Enter a floor number to send the elevator to 
        <input type="number" name="floor" min="1" max="3"/>
        <input type="submit" value="Send It"/>
    </p>

<?php

//connects to db
    $db = new PDO(
        'mysql:host=192.168.0.200; dbname=elevator',  //data source
        'ese',                 //username
        'ese'                 //paseword
    );

   // $db->querry("UPDATE carNode SET floorNumber ='$_POST["floor"]' WHERE nodeID ='1'");


    $current = $db->query("Select floorNumber FROM carNodes");
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