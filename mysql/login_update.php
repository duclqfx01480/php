<?php 
    include "db.php";
    include "functions.php";
    
    UpdateTable();
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
            <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php
                            showAllData();
                        ?>
                        <!-- <option value="">1</option> -->
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>

        </div>
    </div> <!-- end container -->




    
</body>
</html>