<?php
    include('config.php');

    if(isset($_POST['submit']))
    {
        if($_POST['courseName'] == "0" ||empty($_FILES['myFile']) || empty($_POST['pdfName']))
        {
            ?>
            <script>
                alert("Please fill all the fields!");
                window.location.replace("../php/Upload.php");
            </script>
            <?php
        }
        else{
            $course = $_POST['courseName'];
            $displayName = $_COOKIE['userName'];
            
            $filename = $_FILES['myFile']['name'];
            $destination = "../uploads/".$course."/".$filename;

            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            $file = $_FILES['myFile']['tmp_name'];
            $size = $_FILES['myFile']['size'];

            $t = time();
            $day = date("d-m-y", $t);

            $pdfname = $_POST['pdfName'];
            
            if($extension == "pdf")
            {
                if(move_uploaded_file($file, $destination))
                {
                    $query="INSERT INTO $course (displayName, Date, downloads, size, pdfName, path, course) VALUES ('$displayName','$day' , 0, $size, '$pdfname', '$destination', '$course')";

                    if($conn->query($query))
                    {
                        ?>
                        <script>
                            alert("File Uploaded Successfully!");
                            window.location.replace("../php/Upload.php");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("An error occured!");
                            window.location.replace("../php/Upload.php");
                        </script>
                        <?php
                    }

                }else{
                    ?>
                    <script>
                        alert("Error in uploading file!");
                        window.location.replace("../php/Upload.php");
                    </script>
                    <?php
                }
            }else{
                ?>
                <script>
                    alert("Please upload a .pdf file!");
                    window.location.replace("../php/Upload.php");
                </script>
                <?php
            }
        }
    }
?>