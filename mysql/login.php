<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // connect to MySQL database with php
        // server       :   localhost
        // username     :   root
        // password     :   not set
        // database name:   loginapp
        $connection = mysqli_connect('localhost', 'root','', 'loginapp');

        if($connection){
            echo "We are connected to the database";
        }else{
            echo "Database connection failed";
        }

        // if($username && $password){
        //     echo $username . "<br>";
        //     echo $password . "<br>";
        // }else{
        //     echo "These fields could not be blank.";
        // }

        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>MySQL</title>
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>




    
</body>
</html>