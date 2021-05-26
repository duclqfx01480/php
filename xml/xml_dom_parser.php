<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML DOM Parser</title>
</head>
<body>

    <?php
        // create a DOMDocument Object
        $xmlDoc = new DOMDocument();

        // and load the xml from "note.xml" into $xmlDoc
        $xmlDoc->load("note.xml");

        // saveXML() function puts the internal XML document into a string, 
        // and print to output it
        print $xmlDoc->saveXML();
    ?>
    
</body>
</html>