<?php
    $servername = "localhost";
    $username = "root";
    $password = "SHAshu4321#@aws_root";
    $dbname = "FilesDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->error)
        echo "couldn't connect to db";
?>
