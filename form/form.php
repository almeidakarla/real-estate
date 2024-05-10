<?php

if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mailTo = "karla.ca@hotmail.com"
    $headers = "From: ".$email; 
    $txt = "You have received an email from ".$name.".\n\n".$message;

    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../index.html");

}
