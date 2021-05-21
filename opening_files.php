<?php 
    // Khai báo tên tập tin
    $file = "example.txt";
    
    // Mở với thông số 'w' để thực hiện ghi tập tin
    $handle = fopen($file,'w');
    
    // Đóng tập tin sau khi thao tác xong
    fclose($handle);

?>