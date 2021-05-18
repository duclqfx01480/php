<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it

 */

 // Step1: Use a pre-built math function here and echo it
 echo pow(5,2);
 echo "<br>";
 echo "Random number: " . rand(1,1000);
 echo "<br>";
 // Step 2:  Use a pre-built string function here and echo it
 $string = "Hello";
 echo $string . "<br>";
 echo "Length: " . strlen($string) . "<br>";
 // Step 3:  Use a pre-built Array function here and echo it
 $values = ['string', 123, 'another string', 68, 'Hello'];
 $found = in_array($string, $values);

 if($found){
	 echo "Wow, we found string in the array";
 }else{
	 echo "We messed up, we cannot find!";
 }

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>