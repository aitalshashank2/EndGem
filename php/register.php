<?php

    include("config.php");

    if(empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['Password']) || empty($_POST['CnfPassword'])){
        ?>
            <script>
                alert("Please fill all the fields!");
                window.location.replace("../html/Register.html");
            </script>
        <?php
    }else{


        $user = $_POST['userName'];
        $email = $_POST['email'];
        $pass = $_POST['Password'];
        $cpass = $_POST['CnfPassword'];
    
        $con = explode(".", $email);
    
        if(!($con[sizeof($con) - 3] == "iitr" && $con[sizeof($con) - 2] == "ac" && $con[sizeof($con) - 1] == "in")){
            ?>
                <script>
                    alert("Please enter your IITR G-Suite ID");
                    window.location.replace("../html/Register.html");
                </script>
            <?php
        }else{
            if($pass != $cpass){
                ?>
                    <script>
                        alert("Passwords do not match");
                        window.location.replace("../html/Register.html");
                    </script>
                <?php 
            }else{
                $query = "INSERT INTO UserInfo VALUES ('$user', '$pass', '$email');";
                
                if($conn->query($query)){
                    ?>
                        <script>
                            alert("User Registration Successful. You can now Log in");
                            window.location.replace("../html/slogin.html");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("There was an error in registering");
                            window.location.replace("../html/Register.html");
                        </script>
                    <?php
                }
            }
        }
    }
?>