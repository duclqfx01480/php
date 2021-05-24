<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form URL/ Email Validation</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <?php
        //defines variables and set to empty values
        $name = $email = $website= $comment = $gender = "";
        $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name = validateInput($_POST["name"]);
                // check if name only contains letters and whitespace
                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = validateInput($_POST["email"]);
                // check if email is valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email";
                }

            }
            
            if(empty($_POST["website"])){
                $websiteErr = "Website is required";
            }else{
                $website = validateInput($_POST["website"]);
                // check if email is valid
                
                $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";

                if(!preg_match($pattern, $email)){
                    $websiteErr = "Invalid URL";
                }
            }

            if(empty($_POST["comment"])){
                $commentErr = "";
            }else{
                $comment = validateInput($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = validateInput($_POST["gender"]);
            }
            
        }

        function validateInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    

    <h2>Form validation</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr ?> </span>
        <br><br>
        
        Email: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr ?> </span>
        <br><br>
        
        Website: <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr ?> </span>
        <br><br>
        
        Comment: <textarea name="comment" cols="40" rows="5"></textarea>
        <!-- <span class="error">* <?php echo $commentErr ?> </span> -->
        <br><br>
        
        Gender: 
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <span class="error">* <?php echo $genderErr ?> </span>
        <br><br>

        <input type="submit" name="submit" value="Submit">    
    </form>

    <?php
        echo "<h2>Your input</h2>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $website . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";
    ?>

    
</body>
</html>