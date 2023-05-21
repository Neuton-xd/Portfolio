<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $message = $_POST["message"];

  // Perform any necessary processing or validation
  // For example, you can check if the email is valid using filter_var

  // Send an email or store the data in a database
  // For example, you can use the mail function to send an email

  $to = "pearlbaghel@gmail.com";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  mail($to, $subject, $body);

  // Redirect the user to a thank-you page
  header("Location: home.html");
  exit;
}
?>
