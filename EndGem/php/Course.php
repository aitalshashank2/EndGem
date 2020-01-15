<?php
    if((!isset($_COOKIE['userName'])) || ($_COOKIE['userName'] == "")){
       header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
       die(header('location: ../html/index.html'));
    }
    include('sort.php');
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

        <style>
            body{
                background-image: url("../Images/whitelogo.png"), radial-gradient(rgb(0, 0, 0), rgba(174, 0, 255, 0.192));
            }
            .decor{
            text-decoration:underline;
            }
        </style>
        <script type="text/javascript" src="../jquery/cnf.js"></script>
        <script>

            $(document).ready(function(){
                setInterval(function(){
                    $("#DropDown").load("lead.php?cs=<?php echo $course;?>");
                }, 1000);
            });

            $(document).ready(function(){
                setInterval(function(){
                    $("#listing").load("listX.php?cs=<?php echo $course;?>");
                }, 1000);
            });

        </script>
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
                    <a href="../php/Course.php?cs=Course1" class="navText" id="navButton1">course1</a>
                    <a href="../php/Course.php?cs=Course2" class="navText" id="navButton2">course2</a>
                    <a href="../php/Course.php?cs=Course3" class="navText" id="navButton3">course3</a>
                    <a href="../php/Course.php?cs=Course4" class="navText" id="navButton4">course4</a>
                </div>
            </div>

            <div class="navbuttons">
                <a href="../html/index.html" onclick="logout();">
                    <div class="logo"><img src="../Images/logout.png" height="50px" width="50px" style="margin:10px;"></div>
                </a>
                
                <a href="../php/Upload.php">
                    <div class="logo"><img src="../Images/plus.png" height="50px" width="50px" style="margin:10px;"></div>
                </a>

                <a onclick="show();">
                    <div class="logo"><img src="../Images/lead.png" height="50px" width="50px" style="margin:10px;" id="leaderimg"></div>
                </a>
            </div>
            
        </div>

            <div style="position:relative;">

            <div class="leaderboard hideX" id="DropDown">
                <div class="leaderboardText">
                    Leader Board
                </div>    

                <?php
                    if(sizeof($dateX) <= 6){
                        $maxX = sizeof($dateX);
                    }else{
                        $maxX = 6;
                    }

                    for($x = 0; $x < $maxX; $x++){echo 
                        '<div class = "listElement" id="IB'.$x.'">
                            <div class="listText" style="margin-right:10px; font-size:45px; margin-right:10px;">
                                '.($x + 1).'
                            </div>
                            <div class="listText">
                                '.$pdfNameX[$x].'<br>
                                Author: '.$displayNameX[$x].'
                            </div>
        
                            <div class="listText" style="float:right; margin-right:15px;">
                                <div style="color:rgb(255, 255, 255); margin-right:30px; display:inline-block; line-height:60px;">Upload Date : '.$dateX[$x].'</div>
                                <div style="color:rgb(255, 245, 107); margin-right:30px; display:inline-block; line-height:60px;">Total Downloads : '.$downloadsX[$x].'</div>
                                <div class="listText">
                                    <a href="../php/increaseD.php?fileID='.$IDX[$x].'&course='.$course.'" target="_blank">
                                        <img src="../Images/downloadremake.png" height="40px" width="40px" style="vertical-align: middle; margin:5px;">
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <div class = "list" id = "listing">
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
            </div>
        </div>
    </body>

    
    <script>

        //highlight active page
        
        var element;
        switch(document.URL)
        {
            case "http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/Course.php?cs=Course1":
                element = document.getElementById('navButton1');
                break;

            case "http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/Course.php?cs=Course2":
                element = document.getElementById('navButton2');
                break;

            case "http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/Course.php?cs=Course3":
                element = document.getElementById('navButton3');
                break;

            case "http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/Course.php?cs=Course4":
                element = document.getElementById('navButton4');
                break;

            default:
                alert("Error");
        }
        element.classList.add('decor');


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

    </script>

</html>
