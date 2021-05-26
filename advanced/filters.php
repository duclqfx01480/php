<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>
<body>
    <h2>Sanitize a String</h2>
    <?php
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
    ?>

    <h2>Validate an Integer</h2>
    <?php
        $int = 100;
        if(!filter_var($int, FILTER_VALIDATE_INT)===false){
            echo "Integer is valid";
        }else{
            echo "Integer is not valid";
        }
    ?>

    <h2>Validate an Integer and problem with 0</h2>
    <?php
        $int = 0;
        if(filter_var($int, FILTER_VALIDATE_INT)===0 || !filter_var($int, FILTER_VALIDATE_INT)===false){
            echo "Integer is valid";
        }else{
            echo "Integer is not valid";
        }
    ?>

    <h2>Validate IP Address</h2>
    <?php
        $ip = "192.168.1.1";
        if(!filter_var($ip, FILTER_VALIDATE_IP)===false){
            echo "$ip is a valid IP Address";
        }else{
            echo "$ip is invalid IP Address";
        }
    ?>

    <h2>Sanitize and Validate an Email Address</h2>
    <?php
        $email = "john.doe@domain.com";
        // remove illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            echo "$email is a valid email.";
        }else{
            echo "$email is an invalid email";
        }
    ?>

    <h2>Sanitize and Validate a URL</h2>
    <?php
        $url = "https://www.domain.com/";

        // remove all illegal characters from the url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate url
        if(!filter_var($url, FILTER_VALIDATE_URL)===false){
            echo "$url is a valid url";
        }else{
            echo "$url is an invalid url";
        }
    ?>
    
</body>
</html>