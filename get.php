<?php
    print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>

    <?php
        $id = 200;
        $button_caption = "Submit now";
    ?>

    <a href="get.php?id=<?php echo $id?>"> <?php echo $button_caption ?> </a>

    
    
</body>
</html>