<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['firstname'];
        $last_name = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['Contact'];
        $age = $_REQUEST['age'];
        $education_apply = $_REQUEST['education_apply'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $zip_code = $_REQUEST['zip_code'];
        $preferences = $_REQUEST['preferences'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO admission_form  VALUES ('','$first_name',
            '$last_name','$email','$contact','$age','$education_apply','$gender',
            '$address','$city','$zip_code','$preferences[0]')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>