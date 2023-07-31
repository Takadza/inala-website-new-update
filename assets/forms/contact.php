<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'admin@inalaprojects.com'; // Change this to your own email address
  $headers = "From: $name <$email>";
  $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Your message has been sent. Thank you!';
  } else {
    echo "error";
  }
}
?>