<?php
    include("config.php");

    if((!isset($_GET['email'])) || (!isset($_GET['hash']))){
        echo "wrong link";
    }else{
        $email = $_GET['email'];
        $hash = $_GET['hash'];

        $query = "SELECT * FROM UserInfo WHERE email='$email' AND hash='$hash' AND status='0';";
        $match = $conn->query($query);
        if(mysqli_num_rows($match) > 0){
            $q = "UPDATE UserInfo SET status='1' WHERE email='$email' AND hash='$hash';";
	    $op = $conn->query($q);
	?>
                <script>
                    window.location.replace("../html/signedup.html");
                </script>
                <?php
        }else{
            echo "Invalid link";
        }
    }
?>
