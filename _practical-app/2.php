<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
	
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */
		$number1 = 10;
		$number2 = 20;
	
		echo "Sum two numbers: " . $number1 + $number2 . "<br>";

		$list1 = array(10,20);
		$list2 = array('first'=>10, 'second'=>20);

		echo "Add up list1: " . $list1[0] + $list1[1] . "<br>";
		echo "Add up list2: " . $list2['first'] + $list2['second'] . "<br>";

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>