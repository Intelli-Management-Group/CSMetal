<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'localhost'; // MailHog
    $mail->Port = 1025;        // MailHog SMTP port

    // Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('test@example.com', 'Recipient');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email with PHPMailer';
    $mail->Body    = 'This is a test email using PHPMailer and MailHog.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
