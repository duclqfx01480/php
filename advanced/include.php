<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <h1>The demonstration of using include</h1>
    <p>Description</p>
    <p>Another paragraph</p>

    <div class="menu">
        <?php include "includes/menu.php"; ?>
    </div>

    <?php 
        include "includes/vars.php";
        echo "<br>The variables declared in separated file: <br>car = " . $car . "<br>color = " . $color; 
    ?>

    <?php include "includes/footer.php"; ?>
    
</body>
</html>