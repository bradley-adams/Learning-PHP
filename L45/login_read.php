<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //default username is root, password is empty and users is the table.

    if($connection){
        echo "Connected";
    } else {
        die("Database Connection Failed");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die ('Query Failed' . mysqli_error());
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

<pre class="col-sm-6">

    <?php

    while($row = mysqli_fetch_assoc($result)){

        ?>
    <pre>

        <?php
        print_r($row);
        ?>

    </pre>

    <?php
    }

    ?>

</div>

</div>
</body>
</html>