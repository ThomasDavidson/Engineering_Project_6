<?php
class FloorNode3 extends Elevator {
    private $floor3;

    public function __construct(int $floor3, int $currentFloor){
        $this->floor3 = $floor3;
        parent::__construct($currentFloor);
    }

    public function thisFloor(): int{
        if($floor3 == $currentFloor)
            return TRUE;
        else
            return FALSE;
    }
   
}
?>