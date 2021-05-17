<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers
	Step 2: Make a function that passes parameters and call it using parameter values
 */

 // Step1: Define a function and make it return a calculation of 2 numbers
 function SumTwoNumbers(){
	 return 5 + 10;
 }

 // Step 2: Make a function that passes parameters and call it using parameter values
function addNumbers($number1, $number2){
	return $number1 + $number2;
}

echo SumTwoNumbers() . "<br>";
echo addNumbers(5,10);



	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>