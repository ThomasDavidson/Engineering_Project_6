<?php
class distsensor {
    private $distance;
    private $origin;

    public function __construct (float $objDistance, float $objOrigin){
        $this->distance = $objDistance;
        $this->origin = $objOrigin;
    }

    public function getDistance(): float {
        $this->distance = $this->distance - $this->origin;
        return $this->distance;
    }

    public function getOrigin(): float{
        return $this->origin;
    }

    public function setOrigin($objOrigin){
        $this->origin = $objOrigin;
    }

    public function resetOrigin(): float{
        $this->origin = 0.00;
        return $this->origin;
    }


}
?>