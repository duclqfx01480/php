<?php
    // Khai báo tên tập tin
    $file = "example.txt";

    // Đọc tập tin
    if($handle = fopen($file, 'r')){
        echo $content = fread($handle, filesize($file));
        fclose($handle);
    }

?>