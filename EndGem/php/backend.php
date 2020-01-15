<?php

    include('../php/config.php');

    $course = $_GET['cs'];
    $query = "SELECT * FROM $course";
    $result = $conn->query($query);

    while($row = $result->fetch_assoc())
    {
        $ID[] = $row['id'];
        $displayName[] = $row['displayName'];
        $date[] = $row['Date'];
        $downloads[] = $row['downloads'];
        $pdfName[] = $row['pdfName'];
        $path[] = $row['path'];
        $courseName[] = $row['course'];
    }

?>
