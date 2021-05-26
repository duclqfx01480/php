<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>

    <?php
        function divide($dividend, $divisor){
            if($divisor==0){
                throw new Exception("Division by Zero");
            }
            return $dividend / $divisor;
        }

        try{
            echo divide(5,0);
        }catch(Exception $e){
            echo "Unable to divide";
        }
    ?>
    
</body>
</html>