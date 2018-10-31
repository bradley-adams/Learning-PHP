<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php
$name = "Wayne";

if($name == "Wayne"){
    echo "What is PHP";
} else if($name == "Fran"){
    echo "I am a nurse";
} else {
    echo "I Love PHP";
}

echo "<br>";

for($counter = 0; $counter <= 10; $counter++){
    echo $counter . " ";
}

echo "<br>";

switch($name){
    case "Brad":
        echo "I am Brad";
        break;
    case "Wayne":
        echo "I am Wayne";
        break;
    case "Fran":
        echo "I am Fran";
        break;
    case "Farzana":
        echo "I am Farzana";
        break;
    case "Glass":
        echo "I am Glass";
        break;
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test against one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>