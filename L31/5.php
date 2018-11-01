<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

    echo rand(1, 10) . "<br>";

    $string = "Hi I am brad";
    $stringLength = strlen($string);
    echo $stringLength . "<br>";

    $values = ["fsdfsdfsdfs", "sdfsdfsd", 2342323, 23423423, $string];
    $found = in_array($string, $values);
    if ($found){
        echo $string . " and I found myself." . "<br>";
    } else {
        echo "It is lost forever";
    }

    $array = [9, 8, 7, 6, 5, 4, 3, 2, 1];
    sort($array);
    print_r ($array);

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>