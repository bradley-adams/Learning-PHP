
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

<form action="form.php" method="post">
    <input type ="text" name="username" placeholder="Username">
    <br>
    <input type ="password" name="password" placeholder="Password">
    <br>
    <input type ="submit" name="submit">
</form>

</body>
</html>
