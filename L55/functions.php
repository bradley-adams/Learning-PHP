<?php include "db.php"; ?>
<?php

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die ('Query Failed' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function readRows(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die ('Query Failed' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}

function updateTable(){
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users Set ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id "; // id is a sting not an integer.

        $result = mysqli_query($connection, $query);
        if (!$result) {

            die("Query Failed" . mysqli_error($connection));
        } else {
            echo "Update Successful";
        }
    }
}

function deleteRows(){
    if (isset($_POST['submit'])) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id "; // id is a sting not an integer.

        $result = mysqli_query($connection, $query);
        if (!$result) {

            die("Query Failed" . mysqli_error($connection));
        } else {
            echo "Delete Successful";
        }
    }
}

function createRows(){
    if (isset($_POST["submit"])) {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = mysqli_real_escape_string($connection, $username );
        $password = mysqli_real_escape_string($connection, $password );

        $query = "INSERT INTO users(username, password) "; //SQL command
        $query .= "VALUES ('$username', '$password')"; // .= add to the variable

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die ('Query Failed' . mysqli_error());
        } else {
            echo "<h2 class='text-center'>Successfully Created User!</h2>";
        }
    }
}

?>
