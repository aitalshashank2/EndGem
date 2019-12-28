<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die(header('location: ../html/login.html'));
    }

    include('../php/adminBackend.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Admin Console | End Gem</title>

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
            .scroll{
                overflow:auto;
                height:750px;
                overflow-x:hidden;
            }

        </style>
    </head>

    <body>
        <div class="nav">
            <div class="logo">
                <a href="../php/index.php">
                    <img src="../Images/logotrans.png" height="50px" width="50px" style="display: inline-flex; margin-top:5px;">
                    <div class="logoText">
                        End Gem<br>
                        <div style="font-size:17px">Witness the Resurrection</div>
                    </div>
                </a>
            </div>


            <div class="navbuttons">
                <div class="logoText" style="float:right; text-align:center; margin-right:10px;">
                    Welcome,<br><?php echo($aname);?>
                </div>
                <a href="../html/login.html">
                    <div class="logo"><img src="../Images/logout.png" height="50px" width="50px" style="margin:10px;"></div>
                </a>
            </div>
            
        </div>

        <div class = "list scroll">
            <?php

                for($x = 0; $x < sizeof($date); $x++){echo 
                    '<div class = "listElement" style="width:100%;" id="IB'.$x.'">
                        <div class="listText">
                            '.$pdfName[$x].'<br>
                            Author: '.$displayName[$x].'
                        </div>
    
                        <div class="listText" style="float:right; margin-right:15px;">
                            <div style="color:rgb(255, 255, 255); margin-right:30px; display:inline-block; line-height:60px;">Course : '.$courseName[$x].'</div>
                            <div style="color:rgb(255, 255, 255); margin-right:30px; display:inline-block; line-height:60px;">Upload Date : '.$date[$x].'</div>
                            <div style="color:rgb(255, 245, 107); margin-right:30px; display:inline-block; line-height:60px;">Total Downloads : '.$downloads[$x].'</div>
                            <div class="listText">
                                <form action="../php/AdminDel.php" method="POST" enctype="multipart/form-data">
                                    <input style="display:none;" name="fileID" type="text" value="'.$ID[$x].'">
                                    <input style="display:none;" name="course" type="text" value="'.$courseName[$x].'">
                                    <input type="image" value="submit" src="../Images/reddel.png" height="40px" width="40px" style="vertical-align: middle; margin:5px;">
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </body>
</html>