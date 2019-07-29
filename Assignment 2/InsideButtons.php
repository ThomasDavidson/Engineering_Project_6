<?php
class InsideButtons extends Elevator{
    protected $button1;
    protected $button2;
    protected $button3;
    protected $pressedbutton;
    

    public function __construct(int $button1, int $button2,int $button3, int $pressedbutton,int $requestedFloor, int $currentFloor){
        $this->button1 = $button1;
        $this->button2 = $button2;
        $this->button3 = $button3;
        $this->pressedbutton = $pressedbutton;
        parent::__construct($requestedFloor, $currentFloor);
        
}

    public function buttonpress($pressedbutton){
        if($pressedbutton == 1)
            parent::requestFloor(1);
        elseif($pressedbutton == 2)
            parent::requestFloor(2);
        else
            parent::requestFloor(3);
    }

    public function press1(){
        $this->button1 = 1;
        $this->buttonpress($this->button1);
        $this->button1 = 0;
    }

    public function press2(){
        $this->button2 = 2;
        $this->buttonpress($this->button2);
        $this->button2 = 0;
    }

    public function press3(){
        $this->button3 = 3;
        $this->buttonpress($this->button3);
        $this->button3 = 0;
    }

    public function getRequestedFloor(): int {
        return $this->requestedFloor;
    }




}
?>