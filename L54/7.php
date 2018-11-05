<?php include "functions.php"; ?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'section_seven'); //default username is root, password is empty and users is the table.
if(!$connection){
    die("Database Connection Failed") . mysqli_error($connection);
}

global $connection;
$query = "SELECT * FROM Animals";
$result = mysqli_query($connection, $query);
if(!$result){
    die ('Query Failed' . mysqli_error());
}


?>

<?php include "includes/header.php";?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


	<?php
    echo"<h1>Animals:</h1>";
    while($row = mysqli_fetch_assoc($result)){
        echo $row["Name"] . "<br>";
    }

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
