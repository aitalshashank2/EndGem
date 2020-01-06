<?php
    $servername = "localhost";
    $username = "root";
    $password = "SHAshu4321#@mysql";
    $dbname = "FilesDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->error)
        echo "couldn't connect to db";
?>