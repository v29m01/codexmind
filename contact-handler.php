<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'codexmindtnpi@gmail.com'; 
        $mail->Password = 'wvvuhimcjwvltaqx';    
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('codexmindtnpi@gmail.com'); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'] ?: 'Contact Form Submission from CodexMind';
        $mail->Body    = "
            <h4>Contact Form Submission</h4>
            <p><strong>Name:</strong> {$_POST['name']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Message:</strong><br>{$_POST['message']}</p>
        ";

        $mail->send();
        
        // Redirect or show success
        header("Location: thank-you.php"); // or show a message
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
