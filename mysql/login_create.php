<?php

    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])){

        CreateRow();
        
        // some validation
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
        <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </div>




    
</body>
</html>