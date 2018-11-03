<?php

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //default username is root, password is empty and users is the table.

    if($connection){
        echo "Connected";
    } else {
        die("Database Connection Failed");
    }

    $query = "INSERT INTO users(username, password) "; //SQL command
    $query .= "VALUES ('$username', '$password')"; // .= add to the variable

    $result = mysqli_query($connection, $query);

    if(!$result){
        die ('Query Failed' . mysqli_error());
    }

//    if($username && $password){ //giving you a true or false boolean value.
//        echo "Welcome " . $username . "<br>";
//        echo $password;
//    } else {
//        echo "No username or password provided";
//    }


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">

<div class="col-sm-6">
    <form action="login_create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>
</div>

</div>
</body>
</html>