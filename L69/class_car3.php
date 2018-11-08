<?php

class Car {

    function moveWheels(){ //methods are functions inside of classes.
    echo " Wheels Move";
}

}

$bmw = new Car(); //bmw is an object here (group of data related by a common theme)
$mercedes_benz = new Car();

$bmw->moveWheels();
echo "<br>";
$mercedes_benz->moveWheels();
echo "<br>";
$bmw->moveWheels();
echo "<br>";
$mercedes_benz->moveWheels();
echo "<br>";
?>