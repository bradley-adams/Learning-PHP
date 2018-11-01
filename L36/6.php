
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
<form action="6.php" method="post">
    <input type="text" name="quote" placeholder="Enter Quote Here">
    <br>
    <input type="submit" name="submit">
</form>
    

	<?php

    if(isset($_POST['submit'])){
        $quote = $_POST ['quote'];
        echo $quote;
    }

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>