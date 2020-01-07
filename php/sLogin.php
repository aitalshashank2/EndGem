<?php
    include("config.php");

    $aname = $_POST['Aname'];
    $apass = $_POST['Apass'];

    $que = "SELECT * FROM UserInfo WHERE ( UserName = '$aname' AND Password = '$apass')";
    $res = $conn->query($que);

    while($row = $res->fetch_assoc()){
        $state = $row['status'];
    }

    if(mysqli_num_rows($res) > 0 && $state == 1){
        setcookie("userName", $aname, time()+24*60*60);
        ?>
            <script>
                window.location.replace("../php/index.php");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Invalid username or password");
                window.location.replace("../html/slogin.html");
            </script>
        <?php
    }
    
?>
