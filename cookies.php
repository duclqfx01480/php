<?php

    // cookies setting
    $cookieName = "cookieName";
    $value = "John";
    
    // time() return seconds from 1970
    // plus seconds in a week
    $expiration = time() + (60*60*24*7); 

    setcookie($cookieName, $value, $expiration);
    // end cookies setting

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>


    <?php

        $value = "";
        if(isset($_COOKIE[$cookieName])){
            $value = $_COOKIE[$cookieName];
            echo "Welcome back, " . $value;
        }

    ?>
    
</body>
</html>