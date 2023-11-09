<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to Composer autoload.php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $mail = new PHPMailer(true);
  
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'iradukundaokly@gmail.com';
  $mail->Password = 'aeqjyyrvssxugzjq';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->setFrom('iradukundaokly@gmail.com');
  $mail->addAddress($_POST["email"]); // Corrected line
  $mail->isHTML(true);
  
  $mail->Subject = $_POST['subject'];
  $mail->Body = "Name: " . $_POST['name'] . "<br>"
  ."Lname: " . $_POST['lname'] . "<br>"
  . "Gender: " . $_POST['gender'] . "<br>"
  . "Country: " . $_POST['country'] . "<br>"
  . "Message: " . $_POST['message'];
  
  try {
    $mail->send();
    echo "<script>
    alert('message sent successfully');
    window.location.href = 'forme.html'
    </script>";
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
