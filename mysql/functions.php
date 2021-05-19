<?php include "db.php"; ?>

<?php
    function readRows(){
        global $connection;

        $query = "SELECT * FROM users;";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed' . mysqli_error());
        }

        // start
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
        // end 

    }

    function CreateRow(){
        if(isset($_POST['submit'])){
            global $connection;

            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $query);

            if(!$result){
                die('Query Failed' . mysqli_error());
            }else{
                echo "Record created!";
            }
        }
    }
    function showAllData(){
        global $connection;

        $query = "SELECT * FROM users;";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed' . mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            
            // Note: Pay attention to value = '$id', otherwise php will send blank value of id rather than actual id
            echo "<option value='$id'>$id</option>";
        }
    }

    function UpdateTable(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];
    
            $query = "UPDATE users SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password' ";
            $query .= "WHERE id = $id ";
    
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("QUERY FAILED!" . mysqli_error($connection));
            }else{
                echo "Record updated!";
            }
        }
    }

    // Delete row function
    function deleteRow(){
        if(isset($_POST['submit'])){

            global $connection;
            $id = $_POST['id'];

            $query = "DELETE FROM users ";
            $query .= "WHERE id = $id";

            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("QUERY FAILED!" . mysqli_error($connection));
            }else{
                echo "Record deleted!";
            }
        }
    }

?>