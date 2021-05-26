<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Parser</title>
</head>
<body>
    <?php
        $myXMLData = 
        "<?xml version='1.0' encoding='UTF-8'?>
        <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Don't forget the meeting at 8:00am next Saturday</body>
        </note>";

        $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
        print_r($xml);
    ?>
</body>
</html>