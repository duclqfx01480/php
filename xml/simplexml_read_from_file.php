<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple XML Read from File</title>
</head>
<body>

    <?php
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file('note.xml');

        if($xml === false){
            echo "Failed loading XML: ";
            foreach(libxml_get_errors() as $error){
                echo "<br>" . $error->message;
            }
        }else{
            print_r($xml);
        }
        
    ?>
    
</body>
</html>