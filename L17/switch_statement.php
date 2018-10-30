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
// testing one condition against multiple different values.
$number = 26;

switch($number){

    case 34:
        echo "it is 34";
        break;
    case 37:
        echo "it is 37";
        break;
    case 35:
        echo "it is 35";
        break;
    case 24:
        echo "it is 24";
        break;
    default:
        echo "did not match";
        break;

}

?>

</body>
</html>
