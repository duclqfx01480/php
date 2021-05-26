<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Parser - Get Node Value</title>
</head>
<body>

    <?php
        $xml = simplexml_load_file('note.xml') or die("Error: Cannot create XML Object.");
        echo "To: " . $xml->to . "<br>";
        echo "From: " . $xml->from . "<br>";
        echo "Heading: " . $xml->heading . "<br>";
        echo "Body: " . $xml->body;
    ?>
    
</body>
</html>