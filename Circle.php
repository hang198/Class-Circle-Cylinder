<?php
class Circle
{
    public $radius;
    public $color;
    public function __construct($radius , $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function toString(){
        echo "Radius: " . $this->getRadius() . " , Color : ". $this->getColor() . ", Area: " . $this->calculateArea() . "<br>";
    }
}