<?php
require_once __DIR__ . '/distsensor.php';
require_once __DIR__ . '/Elevator.php';
require_once __DIR__ . '/InsideButtons.php';

//require_once __DIR__ . '/FloorNode1.php';
//require_once __DIR__ . '/FloorNode2.php';
//require_once __DIR__ . '/FloorNode3.php';


$distsensor = new distsensor(100,0);
$insidebuttons = new InsideButtons(0,0,0,0,0,0);
$elevator = new Elevator(0,0);

echo "the current distance is " . $distsensor->getDistance() . "<br />" ;
echo "the current origin is " . $distsensor->getOrigin() . "<br />" ;
$distsensor->setOrigin(300.00);
echo "the current origin is " . $distsensor->getOrigin() . "<br />" ;
echo "the current distance is " . $distsensor->getDistance() . "<br />" ;
$distsensor->resetOrigin();
echo "the current origin is " . $distsensor->getOrigin() . "<br />" ;

$insidebuttons->press1();
echo $insidebuttons->getRequestedFloor();
$insidebuttons->press2();
echo $insidebuttons->getRequestedFloor();
$insidebuttons->press3();
echo $insidebuttons->getRequestedFloor();

echo $elevator->getFloor();










?>