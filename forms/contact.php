<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Replace with your actual email address
$receiving_email_address = 'naveen8657@gmail.com';

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

try {
    // Check if this is a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Validate required fields
    $required_fields = ['name', 'email', 'subject', 'message'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            throw new Exception("$field is required");
        }
    }

    // Sanitize and validate input
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';

    // Validate email
    if (!is_valid_email($email)) {
        throw new Exception('Invalid email address');
    }

    // Prepare email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    if (!empty($phone)) {
        $email_content .= "Phone: $phone\n";
    }
    $email_content .= "Message:\n$message";

    // Additional Headers
    $headers = array();
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/plain; charset=UTF-8';
    $headers[] = 'From: ' . $name . ' <' . $email . '>';
    $headers[] = 'Reply-To: ' . $email;
    $headers[] = 'X-Mailer: PHP/' . phpversion();

    // Attempt to send email and capture any error message
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $mail_sent = mail($receiving_email_address, $subject, $email_content, implode("\r\n", $headers));
    
    if ($mail_sent) {
        echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
    } else {
        $error = error_get_last();
        throw new Exception('Failed to send message: ' . ($error['message'] ?? 'Unknown error'));
    }

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage(),
        'debug_info' => [
            'error' => error_get_last(),
            'php_version' => phpversion(),
            'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'unknown'
        ]
    ]);
}
?>
