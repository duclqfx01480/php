<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Parameters</title>
</head>
<body>
    <?php
        function greeting($message){
            echo $message . "<br>";
        }

        function calculate($number1, $number2){
            $sum = $number1 + $number2;
            echo $sum;
        }

        greeting("Welcome to PHP");
        greeting("Hello Student");

        calculate(12,24);

    ?>
    
</body>
</html>