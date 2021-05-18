<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $name = array('Edwin', 'Peter', 'Tony', 'Jane');

        $usernameMinLength = 1;
        $usernameMaxLength = 30;

        //echo "Hello " . $username . "<br>";
        //echo "Your password is " . $password;

        //validation
        if(strlen($username) < $usernameMinLength || strlen($username)>$usernameMaxLength){
            echo "Username has to be longer than  " . $usernameMinLength . " and shorter than " . $usernameMaxLength;
        }

        if(!in_array($username, $name)){
            echo "<br>Sorry! You are not allowed to log in.";
        }else{
            echo "Welcome! " . $username;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Enter Username"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="submit">
    </form>
    <?php

    ?>
    
</body>
</html>