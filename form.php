<?php

if (isset($_POST['submit'])) {
    
    $fullname = $_POST ['fullname'];
    $email = $_POST ['email'];
    $phonenumber = $_POST ['phonenumber'];
    $servicerequested = $_POST ['servicerequested'];
    $sourcelanguage = $_POST ['sourcelanguage'];
    $targetlanguage = $_POST ['targetlanguage'];
    $file = $_POST ['file'];
    $message = $_POST ['message'];

    $para = 'rolltranslations@gmail.com';
    $asunto = 'New Submission from Contact Us';
    $header = "From: ".$email;
    $txt = "You have received an email from ".$fullname".\n\n".$email"\n".$phonenumber"\n".$servicerequested"\n".$sourcelanguage"\n"$targetlanguage"\n".$file"\n".$message;


    mail($para, $asunto, $txt, $header);

    header('Location: success.html');

}

?>