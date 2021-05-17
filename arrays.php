<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $numberList = array();
        $List = ['name'=>'Edwin'];
        $numberList = [1,2,3,4,5];
        $numberList = array(1,2,3,4,5,6);
        $list = array(267, 8765, 345, '5345', 345, '<h1>Hello</h1>');

        print_r($numberList);
        
        echo "<br>";
        echo "The 6th element (index of 5) of numberList is " . $numberList[5];

        

    ?>
    
</body>
</html>