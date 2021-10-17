<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subjet = $_POST['subject'];
$mesage = $_POST['message'];

$email_from = 'amdin@themountinn.com';
$email_subject ='New Form Submission';

$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                    "subject: $subjet.\n".
                        "user message: $mesage.\n"

$to = 'mukulprajapat1319@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Mukindex.html");
?>