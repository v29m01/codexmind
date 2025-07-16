<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $cover = htmlspecialchars($_POST['coverletter']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'codexmindtnpi@gmail.com'; 
        $mail->Password   = 'wvvuhimcjwvltaqx';    
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom($email, $name);
        $mail->addAddress('codexmindtnpi@gmail.com'); 

        $mail->isHTML(true);
        $mail->Subject = "New Job Application from $name for CodexMind";
        $mail->Body    = "
            <h3>New Application Received</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Cover Letter:</strong><br>$cover</p>
        ";

        // Upload CV
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
            $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
        }

        $mail->send();
        header("Location: career-thank-you.php"); // Or show success message
        exit;

    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>
