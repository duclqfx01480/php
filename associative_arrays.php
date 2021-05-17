<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrayss</title>
</head>
<body>
    <?php
        $number = array(10, 20, 49);
        print_r($number);
        echo "<br>";

        $list = array('juanita', 'maria', 'jose');
        print_r($list);
        echo "<br>";

        echo $number[2] . "<br>";

        $names = array('firstname' => 'Edwin', 'lastname'=>'Diaz');
        print_r($names);

        echo "<br>";
        echo 'names[firstname] = ' . $names['firstname'] . '<br>' . 'names[lastname] = ' . $names['lastname'];

    ?>
    
</body>
</html>