<?php

$name = $_POST["Name"];
$email = $_POST["Email"];
$message = $_POST["Message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "nikhiljdas995@gmail.com";
$mail->Password = "ifhpinvccjdptzmo";

$mail->setFrom($email, $name);
$mail->addAddress("pratikmak254@gmail.com", "pratik");

$mail->Body = $message;

$mail->send();

header("Location: sent.html");