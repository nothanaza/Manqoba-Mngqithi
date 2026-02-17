<?php
/**
 * Manboba Mngqithi Foundation — send_mail.php
 * Handles contact form submission
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Sanitise inputs
$name    = htmlspecialchars(strip_tags(trim($_POST['name']    ?? '')));
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars(strip_tags(trim($_POST['subject'] ?? 'General Inquiry')));
$message = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')));

// Validate
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// Send email
$to      = 'info@manbobafoundation.org.za';
$headers = implode("\r\n", [
    "From: {$name} <{$email}>",
    "Reply-To: {$email}",
    "X-Mailer: PHP/" . phpversion(),
    "MIME-Version: 1.0",
    "Content-Type: text/plain; charset=UTF-8",
]);

$body = <<<TXT
New contact form submission from the Manboba Mngqithi Foundation website.

Name:    {$name}
Email:   {$email}
Subject: {$subject}

Message:
{$message}
TXT;

$sent = mail($to, "Website Contact: {$subject}", $body, $headers);

if ($sent) {
    echo json_encode(['success' => true,  'message' => 'Email sent successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to send email. Please try again.']);
}
