<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

if(isset($_POST['submit'])){
deleteRows();
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

  <form action="login_delete.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

      <div class="form-group">
          <select name="id" id="">

              <?php
              showAllData();
              ?>

          </select>
      </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Delete">
        </div>

    </form>

</div>

</div>
</body>
</html>