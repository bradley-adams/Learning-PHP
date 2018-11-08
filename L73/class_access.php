<?php

class Car {

    public $wheels = 4; //like var
    protected $hood = 1; //available to use in this class, a subclass or an extened class.
    private $engine = 1; //use in this class only
    var $doors = 2;

    function showProperty(){
        echo $this->engine;
    }
}

$bmw = new Car();
$semi = new Semi();

class Semi extends Car {


}

echo $bmw->showProperty();

?>