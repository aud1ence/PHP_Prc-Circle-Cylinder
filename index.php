<?php
////use MyApp\Circle\Circle;
//include_once "Circle.php";
//include_once "src/Cylinder.php";
//$circle = new Circle(12, "red");
//$cylinder = new Cylinder(12, "blue", 32);
//echo $circle->toString();
//echo $cylinder->toString();
use src\Circle;
use src\Cylinder;
include_once "vendor/autoload.php";
$circle = new Circle(12, "red");
echo $circle->toString();
echo $circle->calculateArea();
$circle = new Cylinder(12, "black", 32);
echo $circle->calculateArea();
echo $circle->__toString();

