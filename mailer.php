<?php
if(isset($_POST['submit'])) {
    $to = "j_keda@yahoo.com";
    $subject = "Message";
    
    $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    $body = "From: $name_field\n\n E-Mail: $email_field\n\n Messagez:\n\n $message";
    
    mail ($to, $subject, $body);
    
    header ('Location: confirm.html');

} else {}

?>