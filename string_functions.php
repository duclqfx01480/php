<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <?php
        $string = "Hello student, do you like the class?";

        echo "String: " . $string . "<br>";

        echo "Length: " . strlen($string) . "<br>";
        echo "String to uppercase: " . strtoupper($string) . "<br>";
        echo "String to lowercase: " . strtolower($string) . "<br>";

    ?>
    
</body>
</html>