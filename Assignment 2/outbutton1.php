<?php
class OutButton1 extends InsideButtons{
    protected $outbutton1;
  

    public function __construct(int $outbutton1){
        $this->outbutton1 = $outbutton1;     
}

    public function outpress1(){
        $this->outbutton1 = 1;
        parent::buttonpress($this->outbutton1);
        $this->outbutton1 = 0;
    }
}
?>