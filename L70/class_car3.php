<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 2;

    function moveWheels(){ //methods are functions inside of classes.
    $this->wheels = 10;
    }

    function createDoors(){ //methods are functions inside of classes.
        $this->doors = 5;
    }

}

$bmw = new Car(); //this whole thing is an instance?
$truck = new Car();

echo $bmw->wheels . "<br>"; //no $
echo $truck->wheels = 18 . "<br>"; //new instance called truck, changing the wheels for it then echo it out.

$bmw->createDoors();
echo "BMW Doors: " . $bmw->doors . "<br>";
echo "Truck Doors: " . $truck->doors;

?>