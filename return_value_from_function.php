<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Value from Function</title>
</head>
<body>
    <?php

        function addNumber($number1, $number2){
            $sum = $number1 + $number2;
            return $sum;
        }

        echo "Sum of 1 and 2 is " . addNumber(1,2);

    ?>
    
</body>
</html>