<?php

class Car {

    static $wheels = 4;
    var $hood = 1;

    function moveWheels(){
    Car::$wheels = 10;
    }


}

$bmw = new Car();

//$bmw->wheels;

Car::moveWheels();

echo Car::$wheels; //$ back because its a variable not an instance anymore.


?>