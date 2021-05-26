<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML DOM Parser - Looping though XML</title>
</head>
<body>
    <?php
        // initialize the XML parser
        $xmlDoc = new DOMDocument();

        // load the XML
        $xmlDoc->load("note.xml");

        // get all elements of the <note> element
        $x = $xmlDoc->documentElement;

        // loop through all elements of the <note> element
        foreach($x->childNodes as $item){
            print $item->nodeName . " = " . $item->nodeValue . "<br>";
        }

        /*
        * In the example above you see that there are empty text nodes between each element.
        * When XML generates, it often contains white-spaces between the nodes. 
        * The XML DOM parser treats these as ordinary elements, 
        * and if you are not aware of them, they sometimes cause problems.
        */
    ?>
    
</body>
</html>