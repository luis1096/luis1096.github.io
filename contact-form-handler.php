<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $email_from = "luisqaz222@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name\nUser Email: $email\n
    User Message: $message\n";
    $to = "loliv061@fiu.edu";
    $header = "From: $email_from\r\n Reply-To: $email\r\n";

    mail($to, $email_subject, $email_body, $header);
    header("Location: index.html");
?>
