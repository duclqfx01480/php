<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Parser - Get Node Value</title>
</head>
<body>

    <?php
        $xml = simplexml_load_file("books.xml") or die("Error: Cannot create XML object.");
        echo $xml->book[0]->title . "<br>";
        echo $xml->book[1]->title;
    ?>

</body>
</html>