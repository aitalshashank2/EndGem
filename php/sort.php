<?php
    include("backend.php");

    $queryX = "SELECT * FROM $course ORDER BY downloads DESC";
    $resultX = $conn->query($queryX);

    while($rowX = $resultX->fetch_assoc())
    {
        $IDX[] = $rowX['id'];
        $displayNameX[] = $rowX['displayName'];
        $dateX[] = $rowX['Date'];
        $downloadsX[] = $rowX['downloads'];
        $pdfNameX[] = $rowX['pdfName'];
        $pathX[] = $rowX['path'];
        $courseNameX[] = $rowX['course'];
    }

?>