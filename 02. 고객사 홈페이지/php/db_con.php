<?php
    // mysqli 
    $db_host = "192.168.1.40";
    $db_user = "itbank";
    $db_pass = "itbank";
    $db_name = "webdb";
    $db_host1 = "192.168.1.30";
    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if (!$conn) {
         $conn = mysqli_close($db_host,$db_user,$db_pass,$db_name);
         $conn = mysqli_connect($db_host1,$db_user,$db_pass,$db_name);
    }
?>
