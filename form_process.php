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