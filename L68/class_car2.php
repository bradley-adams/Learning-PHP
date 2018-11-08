<?php

class Car {

    function moveWheels(){ //methods are functions inside of classes.
    echo " Wheels Move";
}

}

if(method_exists("Car", "moveWheels")){
    echo "Method is a go";
} else {
    echo "No method";
}

?>