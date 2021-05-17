<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3: Make a switch Statement that test againts one condition with 5 cases
 */
// Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP
$a = 1;
if ($a == 1){
	echo "a = " . $a;
}elseif($a==2){
	echo "a = " . $a;
}else{
	echo "I love PHP";
}

echo "<br>For each loop to print 10 numbers:<br>";

// Step 2: Make a forloop  that displays 10 numbers
for($i=1; $i<=10; $i++){
	echo $i . "<br>";
}

// Step 3: Make a switch Statement that test againts one condition with 5 cases
echo "<br>Using switch statment:<br>";
$x  = 1;
switch($x){
	case 1:
		echo "x = 1";
		break;
	case 2:
		echo "x = 2";
		break;
	case 3:
		echo "x = 3";
		break;
	case 4:
		echo "x = 4";
		break;
	case 5:
		echo "x = 5";
		break;
	default:
		echo "x is not in range [1,5]";
		break;
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>