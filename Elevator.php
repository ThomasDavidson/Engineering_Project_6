<?php
class Elevator{
    protected $currentFloor;
    protected $requestedFloor;
    

    public function __construct (int $currentFloor, int $requestedFloor){
        $this->currentFloor = $currentFloor;
        $this->requestedFloor = $requestedFloor;
    } 
    
    public function requestFloor($requestedFloor){
        $this->requestedFloor = $requestedFloor;
        $this->currentFloor = $requestedFloor;
    }

    public function getFloor(): int {
        return $this->currentFloor;
    }

   

    //abstract public function thisFloor();

}
?>