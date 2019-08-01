<?php
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function calculateVolume(){
        return $this->height * pi() * pow($this->radius,2);
    }
    public function toString()
    {
        parent::toString();
        echo "Volume Cylinder: " .$this->calculateVolume();
    }

}