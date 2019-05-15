<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $subject = $_POST['subject'];
    $email = $_POST['email'];

    $mailTo = "tuckerjolmstead@gmail.com";
    $headers = "From: ".$email;
    $txt = "Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$message;                                                                        


    mail($mailTo, $subject, $txt, $headers);
    header("Location: /");
}

?>