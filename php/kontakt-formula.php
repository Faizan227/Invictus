<?php
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    try {
        // Set up SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.de'; // Update with your SMTP server
        $mail->SMTPAuth = true;
		$mail->Username = 'info@invictus-diamantwerkzeuge.de'; // Update with your SMTP username
        $mail->Password = 'Invictus!In.2022'; // Update with your SMTP password
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Port = 587;

        // Set up sender and recipient
        $mail->setFrom('Homepage@invictus-diamantwerkzeuge.de', 'Homepage'); // Update with your email and name
        $mail->addAddress('faizanriaz009@gmail.com', 'Invictus Diamantwerkzeuge'); // Update with recipient email and name

        // Set email subject and body
        $mail->Subject = 'Homepage Kontak Formula';
        $mail->Body = "Name: $name\nEmail: $email\nphone:$phone\nMessage: $message";

        // Send the email
        $mail->send();

        // Display success message
        $message = 'Email sent successfully.';
    } catch (Exception $e) {
        // Error occurred while sending email
        $message = 'Error: ' . $mail->ErrorInfo;
    }

    header("Location: ../contact.php?message=$message");
    exit();
}
 ?>