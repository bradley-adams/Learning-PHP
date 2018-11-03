<?php include "db.php";

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
          <select name="id" id="">
              <option>1</option>
          </select>
      </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>

    </form>

</div>

</div>
</body>
</html>