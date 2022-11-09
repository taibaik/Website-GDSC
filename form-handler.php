<?php
$name = $_POSTT['name'];
$visitor_email = $_POST['subject'];
$subject = $_POST['email'];
$message = $_POST['message'];

$email_from = 'muhammadhaiqaldwikusuma@mail.ugm.ac.id';

$email_subject = 'New Form Submission';

$email_body = "User Name: name. \n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $message .\n";

$to = 'mhaiqaldk@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


main($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>