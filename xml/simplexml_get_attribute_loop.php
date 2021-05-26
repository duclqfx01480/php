<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Parser - Get Attribute Value Loop</title>
</head>
<body>

    <?php
        $xml = simplexml_load_file("books.xml");

        foreach($xml->children() as $book){
            echo $book['category'] . ", ";
            echo $book->title['lang'] . "<br>";
        }
    ?>
    
</body>
</html>