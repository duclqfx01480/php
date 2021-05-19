<?php
    // connect to MySQL database with php
    // server       :   localhost
    // username     :   root
    // password     :   not set
    // database name:   loginapp
    $connection = mysqli_connect('localhost', 'root','', 'loginapp');

    if($connection){
        echo "We are connected to the database";
    }else{
        echo "Database connection failed";
    }

    $query = "SELECT * FROM users;";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed' . mysqli_error());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>MySQL</title>
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Read</h1>
        <?php
            // while($row = mysqli_fetch_row($result)){
            //     print_r($row);
            // }

            // fetch as associate array
            while($row = mysqli_fetch_assoc($result)){
                ?>

                <pre>
                    <?php
                        print_r($row);
                    ?>
                </pre>

                <?php
            }
        ?>

        </div>
    </div>




    
</body>
</html>