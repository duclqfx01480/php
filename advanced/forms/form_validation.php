<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

    <?php
        //defines các biến
        $name = $email = $website= $comment = $gender = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = validateInput($_POST["name"]);
            $email = validateInput($_POST["email"]);
            $website = validateInput($_POST["website"]);
            $comment = validateInput($_POST["comment"]);
            $gender = validateInput($_POST["gender"]);
        }

        // hàm để validate các biến
        function validateInput($data){
            // loại bỏ các khoảng trắng không cần thiết
            $data = trim($data);
            // loại bỏ các dấu slash (dấu /)
            $data = stripslashes($data);
            // chuyển các ký tự đặc biệt thành mã, ngăn việc chèn code không mong muốn
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    

    <h2>Form validation</h2>
    <!-- Form để submit dữ liệu -->
    <!--
        * $_SERVER["PHP_SELF"] sẽ trả về tên file hiện tại (là file đang xem)
        * htmlspecialchars sẽ chuyển các ký tự đặc biệt như < > thành mã như &lt; và &gt;
        để ngăn việc chèn các code không mong muốn
    -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" cols="40" rows="5"></textarea><br><br>
        Gender: 
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <br><br>
        <input type="submit" name="submit" value="Submit">    
    </form>

    <!-- đoạn code php bên dưới sẽ hiển thị ra giá trị của các biến -->
    <?php
        echo "<h2>Your input</h2>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $website . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";
    ?>

    
</body>
</html>