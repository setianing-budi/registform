<?php
    $con = mysqli_connect("6.tcp.ngrok.io:15650","root","root","uas");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
