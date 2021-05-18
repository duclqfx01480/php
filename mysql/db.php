<?php
    // connect to MySQL database with php
    // server       :   localhost
    // username     :   root
    // password     :   not set
    // database name:   loginapp

    $connection = mysqli_connect('localhost', 'root','', 'loginapp');

    if(!$connection){
        die("Database connection failed");
    }

?>