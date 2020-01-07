<?php

    if((!isset($_COOKIE['userName'])) || ($_COOKIE['userName'] == "")){
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die(header('location: ../html/index.html'));
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Upload</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../css/stylesh.css" type="text/css" rel="stylesheet">
        <link href="../css/uploadstyle.css" type="text/css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

        <style>
            body{
                background-image: url("../Images/whitelogo.png"), radial-gradient(rgb(0, 0, 0), rgba(174, 0, 255, 0.192));
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
                    <a href="../html/login.html">
                        <div class="logo"><img src="../Images/admin.png" height="50px" width="50px" style="margin:10px;"></div>
                    </a>
            </div>
        </div>

        <div class="login">
            <h1 id="login">Add Material</h1>

            <form action="../php/upload.php" method="POST" enctype="multipart/form-data">
                <div class="content">
                    <select class="customSelect" name="courseName">
                        <option value="0">&emsp;Select Course</option>
                        <option value="Course1">&emsp;Course1</option>
                        <option value="Course2">&emsp;Course2</option>
                        <option value="Course3">&emsp;Course3</option>
                        <option value="Course4">&emsp;Course4</option>
                    </select>
                </div>
                <br>
                <br>
                <div class="content">
                    <input type="text" name="pdfName" class="inputField" placeholder="Title for the file">
                </div>

                <br>
                <br>
                <div class="content">
                    <input type="file" name="myFile" class="inputField">
                </div>

                <br>
                <br>

                <div class="content" style="margin-right:90%; text-align:center;">
                        <input type="submit" value="Upload" class="buttoncss" name="submit">
                </div>

            </form>
        </div>
    </body>
</html>