<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php session_start();
$SESSION['movie'] = "The Bourne Supremacy";
?>

<?php
$name = "cookieMonster";
$value = "Blue";
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);
?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
                <?php
                $id=27;
                $button = "Enter Here";

                if(isset($_GET['id'])){
                    echo $_GET['id'];
                }
                ?>
                <a href="9.php?id=<?php echo $id?>"><?php echo $button ?></a>
                <br>
                <?php
                if(isset($_COOKIE['cookieMonster'])){
                    $cookieMonster = $_COOKIE['cookieMonster'];
                    echo $cookieMonster;
                }
                ?>
                <br>
            <?php echo $SESSION['movie'] ?>

	<?php


	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>