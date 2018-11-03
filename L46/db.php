<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //default username is root, password is empty and users is the table.
if(!$connection){
    die("Database Connection Failed");
}

?>