<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 2;

    function __construct(){ //methods are functions inside of classes.
    echo $this->wheels = 10;
    }

}

$bmw = new Car();
$truck = new Car();
$bus = new Car();



?>