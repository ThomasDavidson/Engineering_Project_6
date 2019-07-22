<?php
class FloorNode1 extends Elevator {
    private $floor1;

    public function __construct(int $floor1, int $currentFloor){
        $this->floor1 = $floor1;
        parent::__construct($currentFloor);
    }

    public function thisFloor(): int{
        if($floor1 == $currentFloor)
            return TRUE;
        else
            return FALSE;
    }
   
}
?>