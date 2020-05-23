<?php
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $email_from = "From: $mailFrom";
  $email_subject = "New Form Submission";
  $email_body = "User Name: $name. \n".
                "User Email: $mailFrom. \n".
                "User Message: $message. \n";
  
  $mailTo = "leeyeeyong@outlook.com";

  mail($mailTo, $email_subject, $email_body, $email_from);
  header("Location: index.html?mailsent");

?>