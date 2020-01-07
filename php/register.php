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
                $hash = md5(rand(0, 1000));

                $query = "INSERT INTO UserInfo VALUES ('$user', '$pass', '$email', '$hash', '0');";


                //Email Section

                $to = $email;
                $sub = "EndGem | Verification";
                $message = '
                
                Thanks for signing up for EndGem!
                Your account has been created. Please activate it using the link below.

                http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/verify.php?email='.$email.'&hash='.$hash.'

                                
                ';

                $headers = 'From:noreply@localhost' . "\r\n";
                mail($to, $sub, $message, $headers);

                
                if($conn->query($query)){
                    ?>
                        <script>
                            alert("Please check your mailbox.");
                        </script>
                    <?php
		include("../html/slogin.html");

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
