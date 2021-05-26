<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Expat Parser</title>
</head>
<body>
    <?php
        // initialize the XML parser
        // 1. Initialize the XML parser with the xml_parser_create() function
        $parser = xml_parser_create();

        // 2. Create functions to use with the different event handlers

        // -- 2.1 function to use at the start of an element
        function start($parser, $element_name, $element_attrs){
            switch($element_name){
                case "NOTE":
                    echo "-- Note --<br>";
                    break;
                case "TO":
                    echo "To: ";
                    break;
                case "FROM":
                    echo "From: ";
                    break;
                case "HEADING":
                    echo "Heading: ";
                    break;
                case "BODY":
                    echo "Message: ";
                    break;
            }
        }

        // -- 2.2 function to use at the end of an element
        function stop($parser, $element_name){
            echo "<br>";
        }

        // -- 2.3 function to use when finding character data
        function char($parser, $data){
            echo $data;
        }

        // specify element handler
        // 3. Add the xml_set_element_handler() function 
        // to specify which function will be executed when the parser encounters the opening and closing tags
        xml_set_element_handler($parser, "start", "stop");

        // specify data handler
        // 4. Add the xml_set_character_data_handler() function 
        // to specify which function will execute when the parser encounters character data
        xml_set_character_data_handler($parser, "char");

        // open xml file
        $fp = fopen("note.xml", "r");

        // read data
        while($data=fread($fp, 4096)){
            // 5. Parse the file "note.xml" with the xml_parse() function
            // 6. In case of an error, add xml_error_string() function 
            // to convert an XML error to a textual description
            xml_parse($parser, $data, feof($fp)) or 
            die(sprintf("XML Error: %s at line %d",
                xml_error_string(xml_get_error_code($parser)),
                xml_get_current_line_number($parser)));
        }

        // free the XML Parser
        // 7. Call the xml_parser_free() function 
        // to release the memory allocated with the xml_parser_create() function
        xml_parser_free($parser);
    ?>
</body>
</html>