<?php 
$conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $aurthur =  $_POST['aurthur'];
        $topic = $_POST['topic'];
        $News = $_POST['News'];
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
        $sql = "INSERT INTO news  VALUES ('','$target_file','$aurthur','$topic','$News','2021-04-28 21:01:58')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";
            header("Location: ...\index.html");

 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        mysqli_close($conn);
?>