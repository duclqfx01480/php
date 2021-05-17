<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scopes</title>
</head>
<body>
    <?php
        $x = "outside"; //global scope

        function convert1(){
            $x = "inside"; //local scope
        }

        function convert2(){
            global $x; //declare global scope for variable x
            $x = "inside"; //change the value of global variable
        }

        echo $x;
        echo "<br>";

        convert1();
        
        echo $x;
        echo "<br>";

        convert2();
        echo $x;


    ?>
    
</body>
</html>