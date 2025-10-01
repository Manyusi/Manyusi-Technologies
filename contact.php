<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $log = fopen("messages.txt", "a");
  fwrite($log, "Name: $name | Email: $email | Message: $message\n");
  fclose($log);

  echo "<script>alert('Thank you for contacting us!');window.location='index.php#contact';</script>";
}
?>
