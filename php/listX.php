<?php
    include("backend.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

        <link href="../css/stylesh.css" type="text/css" rel="stylesheet">
        <link href="../css/list.css" type="text/css" rel="stylesheet">
        <link href="../css/master.css" type="text/css" rel="stylesheet">

        <style>
            body{
                background-image: url("../Images/whitelogo.png"), radial-gradient(rgb(0, 0, 0), rgba(174, 0, 255, 0.192));
            }
            .decor{
            text-decoration:underline;
            }
        </style>
    </head>

    <body>
        <?php
            for($x = 0; $x < sizeof($date); $x++){echo 
                '<div class = "listElement">
                    <div class="listText" style="margin-right:10px;">
                        <img src="../Images/pdficon.png" width="40px" height="50px">
                    </div>
                    <div class="listText">
                        '.$pdfName[$x].'<br>
                        Author: '.$displayName[$x].'
                    </div>

                    <div class="listText" style="float:right; margin-right:15px;">
                        <div style="color:rgb(255, 255, 255); margin-right:30px; display:inline-block; line-height:60px;">Upload Date : '.$date[$x].'</div>
                        <div style="color:rgb(255, 245, 107); margin-right:30px; display:inline-block; line-height:60px;">Total Downloads : '.$downloads[$x].'</div>
                        <div class="listText">
                            <a href="../php/increaseD.php?fileID='.$ID[$x].'&course='.$course.'" target="_blank">
                                <img src="../Images/downloadremake.png" height="40px" width="40px" style="vertical-align: middle; margin:5px;">
                            </a>
                        </div>
                    </div>
                </div>';}
        ?>
    </body>
</html>