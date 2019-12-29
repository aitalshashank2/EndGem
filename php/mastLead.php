<?php
    include("../php/master.php");
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
                background-image: radial-gradient(rgb(0, 0, 0), rgba(174, 0, 255, 0.192));
            }
        </style>

    </head>

    <body>
        <div class="leaderboardText">
            Priceless Gems
        </div>    

        <?php
            if(sizeof($date) <= 6){
                $max = sizeof($date);
            }else{
                $max = 6;
            }

            for($x = 0; $x < $max; $x++){echo 
                '<div class = "listElement" id="IB'.$x.'">
                    <div class="listText" style="margin-right:10px; font-size:45px; margin-right:10px;">
                        '.($x + 1).'
                    </div>
                    <div class="listText">
                        '.$pdfName[$x].' ( '.$courseName[$x].' )<br>
                        Author: '.$displayName[$x].'
                    </div>

                    <div class="listText" style="float:right; margin-right:15px;">
                        <div style="color:rgb(255, 255, 255); margin-right:30px; display:inline-block; line-height:60px;">Upload Date : '.$date[$x].'</div>
                        <div style="color:rgb(255, 245, 107); margin-right:30px; display:inline-block; line-height:60px;">Total Downloads : '.$downloads[$x].'</div>
                        <div class="listText">
                            <a href="../php/increaseD.php?fileID='.$ID[$x].'&course='.$courseName[$x].'" target="_blank">
                                <img src="../Images/downloadremake.png" height="40px" width="40px" style="vertical-align: middle; margin:5px;">
                            </a>
                        </div>
                    </div>
                </div>';}
        ?>
    </body>

    <script>
        document.getElementById("IB0").classList.add("soul");
        document.getElementById("IB1").classList.add("time");
        document.getElementById("IB2").classList.add("mind");
        document.getElementById("IB3").classList.add("power");
        document.getElementById("IB4").classList.add("reality");
        document.getElementById("IB5").classList.add("space");
    </script>
</html>