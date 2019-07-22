<?php
class OutButton1 extends InsideButtons{
    protected $outbutton3;
  

    public function __construct(int $outbutton3){
        $this->outbutton3 = $outbutton3;     
}

    public function outpress3(){
        $this->outbutton3 = 3;
        parent::buttonpress($this->outbutton3);
        $this->outbutton3 = 0;
    }
}
?>