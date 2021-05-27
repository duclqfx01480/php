<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User</title>

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th{
            border: 1px solid black;
            padding: 5px;
        }

        th{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $q = intval($_GET['q']);

        $connection = mysqli_connect('localhost', 'root', '', 'php_demo');
        if(!$connection){
            die('Could not connect to the database.');
        }

        //mysqli_select_db($connection, 'php_demo');
        $query = "SELECT * FROM users WHERE id = {$q}";
        $result = mysqli_query($connection, $query);

        echo "
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Hometown</th>
                <th>Job</th>
            </tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['hometown'] . "</td>";
            echo "<td>" . $row['job'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($connection);
    ?>
    
</body>
</html>