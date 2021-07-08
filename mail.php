<?php
        $conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_POST['name_contact'];
        $last_name = $_POST['lastname_contact'];
        $email = $_POST['email_contact'];
        $contact = $_POST['phone_contact'];
        $message = $_POST['message_contact'];
         
        $sql = "INSERT INTO messages  VALUES ('','$first_name','$last_name','$email','$contact','$message')";
         
        if(mysqli_query($conn, $sql)){
            $to_email = $email;
            $subject = "Messaged Received";
            $body = "Hi we have received your messge we will contact you shortly";
            $headers = "From: Husnainahmad521@gmail.com";
            
            if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
            } else {
                echo "Email sending failed...";
            }
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
