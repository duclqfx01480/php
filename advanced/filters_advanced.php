<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters Advanced</title>
</head>
<body>
    <h2>Validate Integer within a range</h2>
    <?php
        $int = 201;
        $min = 1;
        $max = 200;

        if(filter_var($int, FILTER_VALIDATE_INT, array("option"=>array("min_range"=>$min, "max_range"=>$max)))===false){
            echo "Variable value is not within the legal range";
        }else{
            echo "Variable value is within the legal range";
        }
    ?>

    <h2>Validate IPv6 address</h2>
    <?php
        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false){
            echo "$ip is a valid IPv6 address";
        }else{
            echo "$ip is a invalid IPv6 address";
        }
    ?>

    <h2>Validate URL</h2>
    <?php
        $url = "http://google.com";
        if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)===false){
            echo "$url is a valid URL with a query string";
        }else{
            echo "$url is not a valid string with a query string";
        }
    ?>

    <h2>Remove Character with ASCII Value > 127</h2>
    <?php
        $str = "<h1>Hello WorldÆØÅ!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        ECHO $newstr;
    ?>
    
</body>
</html>