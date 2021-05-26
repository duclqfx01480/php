<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Parser - Get Node Value Loop</title>
</head>
<body>

    <?php
        $xml = simplexml_load_file("books.xml");

        foreach($xml->children() as $book){
            echo $book->title . ", ";
            echo $book->author . ", ";
            echo $book->year . ", ";
            echo $book->price . "<br>";
        }
    ?>
    
</body>
</html>