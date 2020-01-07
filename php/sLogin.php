<?php
    include("config.php");

    $aname = $_POST['Aname'];
    $apass = $_POST['Apass'];

    $que = "SELECT * FROM UserInfo WHERE ( UserName = '$aname' AND Password = '$apass')";
    $res = $conn->query($que);

    if(mysqli_num_rows($res) > 0){
        setcookie("userName", $aname, time()+24*60*60);
        include('../php/index.php');
    }else{
        ?>
            <script>
                alert("Invalid username or password");
                window.location.replace("../html/slogin.html");
            </script>
        <?php
    }
    
?>