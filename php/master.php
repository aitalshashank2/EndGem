<?php
    include('config.php');

    $q = "SELECT * FROM Course1 UNION ALL SELECT * FROM Course2 UNION ALL SELECT * FROM Course3 UNION ALL SELECT * FROM Course4 ORDER BY downloads DESC;";
    $res = $conn->query($q);

    while($row = $res->fetch_assoc())
    {
        $ID[] = $row['id'];
        $displayName[] = $row['displayName'];
        $date[] = $row['Date'];
        $downloads[] = $row['downloads'];
        $pdfName[] = $row['pdfName'];
        $path[] = $row['path'];
        $courseName[] = $row['Course'];
    }

?>