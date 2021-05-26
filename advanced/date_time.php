<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
</head>
<body>
    <h2>Get a Date</h2>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
    ?>

    <p>Copyright &copy; 2010-<?php echo date("Y");?></p>

    <h2>Get a Time</h2>
    <?php
        echo "The time is " . date("h:i:sa");
    ?>

    <h2>Set time zone</h2>
    <?php
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        echo "The time is " . date("h:i:sa");
    ?>

    <h2>Create Date with mktime()</h2>
    <?php
        // 2021-05-25 08:30:39am
        $d = mktime(8,30,39,5,25,2021);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <h2>Create a Date from a String with strtotime()</h2>
    <?php
        $d = strtotime("08:30am May 25 2021");
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

        echo "Today is " . date("Y-m-d h:i:sa") . "<br>";

        $d = strtotime("tomorrow");
        echo "Tomorrow is " . date("Y-m-d", $d) . "<br>";

        $d = strtotime("yesterday");
        echo "Yesterday was " . date("Y-m-d", $d) . "<br>";

        $d = strtotime("next Saturday");
        echo "Next Saturday will be " . date("Y-m-d", $d) . "<br>";

        $d = strtotime("+3 months");
        echo "Next 3 months will be " . date("Y-m-d", $d);
    ?>

    <h2>Loop to create list of date</h2>
    <?php
        $startDate = strtotime("Saturday");
        $endDate = strtotime("+6 weeks", $startDate);

        while($startDate < $endDate){
            echo date("M d", $startDate) . "<br>";
            $startDate = strtotime("+1 week", $startDate);
        }
    ?>

    <h2>Other</h2>
    <?php
        $d1 = strtotime("July 04");
        $d2 = ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 . " days until 4th of July";
    ?>
    
</body>
</html>