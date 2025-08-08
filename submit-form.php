<?php
// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not allowed');
}

// Simple email validation
function isValidEmail($email)
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL) !== false;
}

// Simple input sanitization
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_fields'])) {

    // Extract and sanitize form data
    $fields = $_POST['form_fields'];
    $firstName = sanitizeInput($fields['first_name'] ?? '');
    $lastName = sanitizeInput($fields['last_name'] ?? '');
    $email = trim($fields['email'] ?? '');
    $phone = sanitizeInput($fields['tel'] ?? '');
    $companyName = sanitizeInput($fields['company_name'] ?? '');
    $interestedIn = sanitizeInput($fields['company_address'] ?? '');
    $message = sanitizeInput($fields['messages'] ?? '');

    // Validate required fields
    if (
        empty($firstName) || empty($lastName) || empty($phone) ||
        empty($companyName) || empty($interestedIn) || empty($message) ||
        !isValidEmail($email)
    ) {
        header('Location: ./contact.php?error=Please fill all fields correctly.#form');
        exit;
    }

    // Email configuration
    $to = 'info@csmetal-int.com';
    $subject = 'CS Metal Website Inquiry from ' . $firstName . ' ' . $lastName;

    // Email body
    $emailBody = "
    Name: $firstName $lastName
    Email: $email
    Phone: $phone
    Company: $companyName
    Interested In: $interestedIn

    Message:
    $message

    ---
    This message was sent from the CS Metal website contact form.
    ";

    // Headers
    $headers = [
        'From: noreply@csmetal-int.com',
        'Reply-To: ' . $email,
        'Content-Type: text/plain; charset=UTF-8',
        'X-Mailer: PHP/' . phpversion()
    ];

    // Send email
    $mailSent = mail($to, $subject, $emailBody, implode("\r\n", $headers));

    if ($mailSent) {
        header('Location: ./contact.php?success=Your message has been sent#form');
    } else {
        header('Location: ./contact.php?error=Failed to send message. Please try again#form');
    }
    exit;
}
