<?php
include_once ('Circle.php');
include_once ('Cylinder.php');

$circle = new Circle(3,'green');
echo "Infomation Circle:  <br>";
$circle->toString();
echo "Infomation Cylinder:  <br>";
$cylinder = new Cylinder(2,'yellow',8);
$cylinder->toString();