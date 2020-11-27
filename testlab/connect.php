<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'it63070153.mysql.database.azure.com', 'it63070153@it63070153', 'Unknown1234dd', 'testitf', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>
