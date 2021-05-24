<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

    <?php
        //defines variables and set to empty values
        $name = $email = $website= $comment = $gender = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = validateInput($_POST["name"]);
            $email = validateInput($_POST["email"]);
            $website = validateInput($_POST["website"]);
            $comment = validateInput($_POST["comment"]);
            $gender = validateInput($_POST["gender"]);
        }

        function validateInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    

    <h2>Form validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" cols="40" rows="5"></textarea><br><br>
        Gender: 
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
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