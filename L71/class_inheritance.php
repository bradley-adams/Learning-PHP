<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 2;

    function moveWheels(){
    $this->wheels = 10;
    }

    function createDoors(){
        $this->doors = 5;
    }

}

$bmw = new Car();

class Plane extends Car {

    var $wheels = 20; // will override its parent.

}

$jet = new Plane();

//$jet->moveWheels();
echo $jet->wheels;

//if (class_exists("Plane")){
//    echo "it does";
//}

?>