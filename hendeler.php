<?php
   $name = $_Post['name'];
   $visitor_email = $_POST['name'];
   $subject = $_Post['subject'];
   $message = $_Post['message'];

   $email_from = 'info@yourwebsite.com';
   $email_subject = 'New Form Submission';

   $email_body = "User Name:$name.\n";
                 "User Email: $visitor_email.\n";
                 "User Message: $message .\n";

$to = 'armanhossen587@gmail.com';
 $headers = "From: $email_from \r\n";
 $headers .= "Reply-to: $visitor_email\r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("Location:contact.html")
>