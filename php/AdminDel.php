<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die(header('location: ../html/login.html'));
    }

    include('../php/config.php');

    $fileID = $_POST['fileID'];
    $crse = $_POST['course'];

    $que = "SELECT * FROM $crse WHERE id = $fileID";
    $res = $conn->query($que);

    $pth = $res->fetch_assoc()['path'];

    $query = "DELETE FROM $crse WHERE id = $fileID";
    $result = $conn->query($query);

    if(unlink($pth)){
        echo "<script>alert('File deleted!'); window.location.replace('../php/adminConsole.php');</script>";
        die();
    }
?>