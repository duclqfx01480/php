<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

    <?php 
    
        echo "Welcome ". $_POST["name"] . "<br>";
        echo "Your email address is " . $_POST["email"];
    
    ?>

    
</body>
</html>