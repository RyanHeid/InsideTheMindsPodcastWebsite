<?php
 require_once "Mail.php";
 
 $from = "Sandra Sender <sender@example.com>";
 $to = "Ramona Recipient <ryanheid@insidethemindspodcast.com>";
 $subject = "Hi!";
 $body = "Hi,

How are you?";
 
 $host = "mail.insidethemindspodcast.com";
 $username = "smtp_username";
 $password = "smtp_password";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>