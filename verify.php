<?php 
if (isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];
    $conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
         
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $sql = "SELECT verified,vkey from messages where verified = 0 and vkey='$vkey' Limit 1";
    $tt = mysqli_query($conn, $sql);
    if($tt){
        if ($tt->num_rows ==1){
            $updateqry = "UPDATE messages Set verified = 1 where vkey='$vkey' Limit 1"; 
            $gg =mysqli_query($conn, $updateqry);
            if ($gg){
                
            echo "<h3>Verified.";
            header("Location: index.html");
            }


        }
        else{
        }



    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }


    
    mysqli_close($conn);

}

?>