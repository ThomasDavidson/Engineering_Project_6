<?php
class FloorNode2 extends Elevator {
    private $floor2;

    public function __construct(int $floor2, int $currentFloor){
        $this->floor2 = $floor2;
        parent::__construct($currentFloor);
    }

    public function thisFloor(): int{
        if($floor2 == $currentFloor)
            return TRUE;
        else
            return FALSE;
    }
   
}
?>