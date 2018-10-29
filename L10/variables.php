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

$name = 'Bradley';
$number = 100;
$number_List = 100.5;
//$number-list = 100; (cant use a - in a variable name)
//$0umber = 100; (cant start variable name with a number)
$NUMBER = 100; //differ to the number variable
$NUMBeR = "100"; //this is text not a number

echo $name . " " . $number; //concatenating

$name = "<h1>Hello</h1>";
echo $name;

?>

</body>
</html>
