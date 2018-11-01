<?php

if(isset($_POST['submit'])){

    $name = array("Edwin", "Bradley", "Peter", "Samid", "Mohad", "Jane", "Tom");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $minimum = 5;
    $maximum = 10;

    if(strlen($username) < $minimum){
        echo "Username needs to be longer then 5 characters" . "<br>";
    }
    if(strlen($username) > $maximum){
        echo "Username cannot be longer then 10 characters" . "<br>";
    }

    if(!in_array($username, $name)){
        echo "You. Shall. Not. Pass.";
    } else {
        echo "Welcome";
    }

//echo "Hello " . $username;
//echo ", your password is: " . $password;

}

?>
