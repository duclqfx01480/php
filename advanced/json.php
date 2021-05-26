<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <h2>Encode Associative Array to JSON</h2>
    <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo json_encode($age) . "<br>";
    ?>

    <h2>Encode Indexed Array to JSON</h2>
    <?php
        $cars = array("Tiguan", "BMW", "Lexus", "Infinity");
        echo json_encode($cars);
    ?>

    <h2>Decode JSON into PHP Object</h2>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj));
    ?>

    <h2>Decode JSON into PHP associative array</h2>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj, true));
    ?>

    <h2>Accessing the decoded values</h2>
    <h3> -- access PHP object</h3>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $obj = json_decode($jsonobj);

        echo $obj->Peter . "<br>";
        echo $obj->Ben . "<br>";
        echo $obj->Joe . "<br>";
    ?>

    <h3> -- access PHP associative array</h3>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $assoc = json_decode($jsonobj, true);

        echo $assoc['Peter'] . "<br>";
        echo $assoc['Ben'] . "<br>";
        echo $assoc['Joe'] . "<br>";
    ?>

    <h2>Looping through the values</h2>
    <h3> -- looping PHP object</h3>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $obj = json_decode($jsonobj);

        foreach($obj as $key=>$value){
            echo $key . "=>" . $value . "<br>";
        }
    ?>
    <h3> -- looping PHP associative array</h3>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $assoc = json_decode($jsonobj, true);

        foreach($assoc as $key=>$value){
            echo $key . "=>" . $value . "<br>";
        }
    ?>
    
</body>
</html>