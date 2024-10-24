<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer's autoloader
require 'vendor/autoload.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = htmlspecialchars(trim($_POST['form_fields']['first_name']));
    $last_name = htmlspecialchars(trim($_POST['form_fields']['last_name']));
    $email = htmlspecialchars(trim($_POST['form_fields']['email']));
    $phone = htmlspecialchars(trim($_POST['form_fields']['tel']));
    $company_name = htmlspecialchars(trim($_POST['form_fields']['compamy_name'])); // Correct spelling
    $company_address = htmlspecialchars(trim($_POST['form_fields']['compamy_address'])); // Correct spelling
    $message = htmlspecialchars(trim($_POST['form_fields']['messages']));

    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'localhost'; // MailHog
        $mail->Port = 1025; // MailHog port

        // Set sender and recipient
        $mail->setFrom($email, "$first_name $last_name"); // Use user email as sender
        $mail->addAddress('your-email@example.com'); // Replace with your email address

        // Email subject and body
        $mail->isHTML(false); // Set to false for plain text
        $mail->Subject = "New Contact Form Submission";
        $mail->Body = "Name: $first_name $last_name\n" .
                      "Email: $email\n" .
                      "Phone: $phone\n" .
                      "Company Name: $company_name\n" .
                      "Company Address: $company_address\n" .
                      "Message:\n$message";

        // Send the email
        $mail->send();
        echo "Thank you for contacting us. We will get back to you shortly.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
