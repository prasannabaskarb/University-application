<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_from = 'info@holycrossUS.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".

$to = 'prasannabaskar2004@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>