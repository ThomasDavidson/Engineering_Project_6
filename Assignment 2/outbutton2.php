<?php
class OutButton1 extends InsideButtons{
    protected $outbutton2;
  

    public function __construct(int $outbutton2){
        $this->outbutton2 = $outbutton2;     
}

    public function outpress2(){
        $this->outbutton2 = 2;
        parent::buttonpress($this->outbutton2);
        $this->outbutton2 = 0;
    }
}
?>