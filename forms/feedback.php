<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'bensonpr100@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $to = $receiving_email_address;
  $subject = 'Feedback Form Submission';
  $message = "Name: $name\nEmail: $email\nFeedback: $feedback";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo 'Success';
  } else {
    echo 'Error';
  }
?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
