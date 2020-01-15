<?php

    if((!isset($_COOKIE['userName'])) || ($_COOKIE['userName'] == "")){
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die(header('location: ../html/index.html'));
    }
    include('../php/master.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>End Gem</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

        <link href="../css/stylesh.css" type="text/css" rel="stylesheet">
        <link href="../css/list.css" type="text/css" rel="stylesheet">
        <link href="../css/master.css" type="text/css" rel="stylesheet">


        <script type="text/javascript" src="../jquery/cnf.js"></script>
        <script>
            $(document).ready(function(){
                setInterval(function(){
                    $("#DropDown").load("mastLead.php");
                }, 500);
            });
        </script>

        <style>
            .reversehr{
                height: 30px; 
                border-style: solid; 
                border-color: rgb(255, 232, 128); 
                border-width: 0 0 1px 0; 
                border-radius: 20px;
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

            <div style="display: inline-block; margin-left:100px;">
                <div class="navlinks">
                    <a href="../php/Course.php?cs=Course1" class="navText">course1</a>
                    <a href="../php/Course.php?cs=Course2" class="navText">course2</a>
                    <a href="../php/Course.php?cs=Course3" class="navText">course3</a>
                    <a href="../php/Course.php?cs=Course4" class="navText">course4</a>
                </div>
            </div>

            <div class="navbuttons">
                <a href="../html/index.html" onclick="logout();">
                    <div class="logo"><img src="../Images/logout.png" height="50px" width="50px" style="margin:10px;"></div>
                </a>

                <a href="../php/Upload.php">
                    <div class="logo"><img src="../Images/plus.png" height="50px" width="50px" style="margin:10px;"></div>
                </a>

                <a onclick="show();" id="dropButton">
                    <div class="logo"><img src="../Images/lead.png" height="50px" width="50px" style="margin:10px;" id="leaderimg"></div>
                </a>
            </div>
            
        </div>

        <div style="position:relative;">

            <div class="leaderboard hideX" id="DropDown">
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
                        '<div class = "listElement" id="IB'.$x.'">Top
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
                        </div>';
                    }
                ?>
            </div>

            <div class="showoff">
                <div style="display:block; text-align: center;"><img src="../Images/whitelogo.png" width="360px" height="320px"></div>
            </div>
            <div class="showoffText" style="font-size:70px;">End Gem</div>
            <div class="showoffText" style="line-height:65px; color:rgb(243, 226, 255);">Witness the Resurrection<hr></div>

            <div class="showoffText" style="line-height:50px; font-size:40px; color:rgb(255, 232, 128); height: 30px;">
                "Help will always be given,<br> to those who ask for it"<hr class="reversehr">
            </div>
            

        </div>
    </body>

    <script>
        
        document.getElementById("LB0").classList.add("gold");
        document.getElementById("LB1").classList.add("silver");
        document.getElementById("LB2").classList.add("bronze");

        document.getElementById("IB0").classList.add("soul");
        document.getElementById("IB1").classList.add("time");
        document.getElementById("IB2").classList.add("mind");
        document.getElementById("IB3").classList.add("power");
        document.getElementById("IB4").classList.add("reality");
        document.getElementById("IB5").classList.add("space");

        function show()
        {
            //toggle
            document.getElementById("DropDown").classList.toggle("hideX");

            //change image
            if(!document.getElementById("DropDown").classList.contains("hideX")){
                document.getElementById("leaderimg").src = "../Images/close.png";
            }else{
                document.getElementById("leaderimg").src = "../Images/lead.png";
            }
        }   

        function logout(){
            document.cookie = 'userName' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }         
    </script>
</html>
