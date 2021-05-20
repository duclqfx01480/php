<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php
		function connectDB(){
			global $connection;

			$connection = mysqli_connect('localhost', 'root', '', 'practice7');

			if(!$connection){
				die('Database connection failed');
			}else{
				echo "Connect to Database successfully! Ready to read data!<br>";
			}
		}

		function CreateRow($username, $password){
			global $connection;

			$username = mysqli_real_escape_string($connection, $username);
			$password = mysqli_real_escape_string($connection, $password);

			$query = "INSERT INTO users(username, password) VALUES ";
			$query .= "('$username','$password')";

			$result = mysqli_query($connection, $query);

			if(!$result){
				die('Query failed ' . mysqli_error());
			}else{
				echo "New Record inserted!";
			}


		}

		function ReadRows(){
			global $connection;

			$query = "SELECT * FROM users";
			$result = mysqli_query($connection, $query);

			if(!$result){
				die('Query failed' . mysqli_error());
			}

			while($row = mysqli_fetch_assoc($result)){
				print_r($row);
				echo "<br>";
			}
		}

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

	*/

		// Step 1 - Create a database in PHPmyadmin
		// Done
		// Database name: practice7

		// Step 2 - Create a table like the one from the lecture
		// Done
		// Table name: users
		// - id int(11) primary key auto-increment
		// - username varchar(32)
		// - password varchar(200)

		// Step 3 - Insert some Data
		// Step 4 - Connect to Database and read data
		connectDB();

		// create new row
		//CreateRow("Elon Musk", "Tesla");

		ReadRows();
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
