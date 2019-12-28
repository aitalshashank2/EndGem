<?php
    include('config.php');

    $localID = $_GET['fileID'];
    $crse = $_GET['course'];

    $incr = "SELECT * FROM $crse WHERE id = $localID";
    $res = $conn->query($incr);

    while($row = $res->fetch_assoc())
    {
        $path = $row['path'];
    }

    $dwn = "UPDATE $crse SET downloads = downloads + 1 WHERE id = $localID";
    $fin = $conn->query($dwn);

    header('Content-type: application/pdf'); 
  
    header('Content-Transfer-Encoding: binary'); 
  
    header('Accept-Ranges: bytes'); 
    @readfile($path);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Ressurect</title>
    </head>
</html>