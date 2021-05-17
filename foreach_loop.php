<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
</head>
<body>
    <?php
        $numbers = array(1,26,39,46,51,68,79,86,39,100);

        foreach($numbers as $number){
            echo $number . "<br>";
        }

    ?>
    
</body>
</html>