<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
    <?php
        $list = [1,3,5,8,6,9,3];

        print_r($list);
        echo "<br>";

        echo "Max in the array: " . max($list) . "<br>";
        echo "Min in the array: " . min($list) . "<br>";

        sort($list);
        print_r($list);
        echo "<br>";

    ?>
    
</body>
</html>