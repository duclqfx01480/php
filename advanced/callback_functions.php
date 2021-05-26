<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Functions</title>
</head>
<body>

    <h2>Use a function for array_map</h2>
    <?php
        // Định nghĩa hàm myCallback
        // Hàm này sẽ trả về chiều dài (strlen) của đối số đưa vào
        function myCallback($item){
            return strlen($item);
        }

        // Mảng chứa các string
        $strings = ['java', 'javascript', 'python', 'php'];

        // Mảng chứa các giá trị sau khi qua xử lý của hàm callback có tên là myCallback
        // Mảng này chứa chiều dài tương ứng với từng giá trị của mảng $strings
        $lengths = array_map('myCallback', $strings);

        // in kết quả của mảng chiều dài ra
        print_r($lengths);
    ?>

    <h2>Use anonymous function as a callback for array_map</h2>
    <?php
        $strings = ['java', 'javascript', 'python', 'php'];
        // sử dụng một hàm ẩn danh (anonymous function) làm callback
        $lengths = array_map(function($item){return strlen($item);}, $strings);
        print_r($lengths);
    ?>

    <h2>Callback in User Defined Functions</h2>
    <?php
        function exclaim($str){
            return $str . "!";
        }

        function ask($str){
            return $str . "?";
        }

        function printFormatted($str, $format){
            echo $format($str);
        }

        printFormatted("Hello", "exclaim");
        echo "<br>";
        printFormatted("Hello", "ask");
    ?>
    
</body>
</html>