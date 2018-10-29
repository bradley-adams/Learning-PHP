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

$numberList = array(267, 8765, 345, '5345', 345, '<h1>Hello</h1>');

//print_r($numberList);

echo $numberList[1];
echo $numberList[5];

echo "<br>";
$numberListNewOthers = ['name'=>'Bradley'];
$numberListNewNumbers = [2, 34, 2, 4, 45435, 34];

?>

</body>
</html>
