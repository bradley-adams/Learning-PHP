<?php include "db.php";?>
<?php include "functions.php";?>

<?php include "includes/header.php";?>

<?php
createRows();
?>

<div class="container">

<div class="col-sm-6">
    <h1 class="text-center">Create User:</h1>
    <form action="login_create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
</div>

</div>

<?php include "includes/footer.php";?>