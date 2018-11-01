<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php
    function adding(){
        $firstNum = 30;
        $secondNum = 40;
        $sum = $firstNum + $secondNum;
        return $sum;
    }
    $theSum = adding();
    echo $theSum . "<br>";



    function greet($n1, $n2){
        echo $n1 . $n2;
    }
    greet("Hello, ", "Bradley");


/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>