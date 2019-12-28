<?php
    include("config.php");

    $aname = $_POST['Aname'];
    $apass = $_POST['Apass'];

    $que = "SELECT * FROM AdminInfo WHERE ( UserName = '$aname' AND Password = '$apass')";
    $res = $conn->query($que);

    if(mysqli_num_rows($res) > 0){
        include('../php/adminConsole.php');
    }else{
        include('../html/login.html');
    }

?>