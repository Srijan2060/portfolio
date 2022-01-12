<?php

   $name = $_POST ['name'];
   $visitor_email = $_POST ['email'];
   $message = $_POST ['message'];
   
   
   $email_from = 'contact@srijandhungana.com.np';
   
   $email_subject = "New contact";
   
   $email_body = "User name: $name.\n".
                   "User email: $visitor_email.\n".
                      "User message: $message.\n";
   
   $to = 'justforstudy2078@gmail.com';
   
   $headers = "From:" .$email_from. " \r\n";
   
   $headers = "Reply-to:" .$visitor_email." \r\n";
   
   mail($to, $email_subject, $email_body, $headers) or die("Error!");
   
   header('Location: http://srijandhungana.com.np/');


?>
