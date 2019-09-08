<?php

    if (isset($_POST['submit'])) {

        $firstname = $_POST["first-name"];
        $lastname = $_POST["last-name"];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $data = 
        "First Name - $firstname 
        Last Name - $lastname
        Email - $email
        Message - $message";

        echo "Submitted Succesfully";

        $newFile = "form.txt";

        $file = fopen($newFile, "w");
        fwrite($file, $data);
 

        fclose($file);    
        
    }
?>