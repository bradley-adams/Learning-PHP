<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$x = "outside"; // global scope

function convert(){
    global $x; //making local global
    $x = "inside"; // local scope

}

echo $x;

echo "<br>";

convert();

echo $x;

echo $x;

?>

</body>
</html>
