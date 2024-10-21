<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['tel']));
    $company_name = htmlspecialchars(trim($_POST['company_name']));
    $company_address = htmlspecialchars(trim($_POST['company_address']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the form data
    if (empty($first_name) || empty($last_name) || empty($email) ||empty($phone) || empty($company_name) || empty($company_address) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Prepare the email
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $first_name $last_name\n
    Email: $email\n
    Phone: $phone\n
    Company Name: $company_name\n
    Company Address: $company_address\n
    Message:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
