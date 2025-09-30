<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Email config
$emailConfig = require 'email_config.php';

// Database connection
require 'setup_database.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

// Collect form data
$fullName   = $_POST['fullName'] ?? '';
$email      = $_POST['email'] ?? '';
$phone      = $_POST['phone'] ?? '';
$package    = $_POST['packageSelect'] ?? '';
$date       = $_POST['travelDate'] ?? '';
$travelers  = (int)($_POST['numTravelers'] ?? 0);
$message    = $_POST['message'] ?? '';

// Validation
if (!$fullName || !$email || !$package || !$date || $travelers < 1) {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields']);
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit();
}

if ($travelers < 1 || $travelers > 20) {
    echo json_encode(['success' => false, 'message' => 'Number of travelers must be between 1 and 20']);
    exit();
}

// Save booking in DB
$stmt = $conn->prepare("INSERT INTO bookings (full_name, email, phone, package_name, travel_date, num_travelers, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $fullName, $email, $phone, $package, $date, $travelers, $message);

if ($stmt->execute()) {
    $bookingId = $conn->insert_id;

    // Send Email Confirmation
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = $emailConfig['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $emailConfig['smtp_username'];
        $mail->Password   = $emailConfig['smtp_password'];
        $mail->SMTPSecure = $emailConfig['smtp_secure'];
        $mail->Port       = $emailConfig['smtp_port'];

        $mail->setFrom($emailConfig['from_email'], $emailConfig['from_name']);
        $mail->addAddress($email, $fullName);
        $mail->addReplyTo($emailConfig['reply_to'], $emailConfig['from_name']);

        $mail->isHTML(true);
        $mail->Subject = "Booking Confirmed (#$bookingId) - Thank You!";
        $mail->Body    = "
            <h2>Booking Confirmed</h2>
            <p>Hi <b>$fullName</b>,</p>
            <p>Thank you for booking with us! Here are your details:</p>
            <ul>
                <li><b>Booking ID:</b> #$bookingId</li>
                <li><b>Package:</b> $package</li>
                <li><b>Date:</b> $date</li>
                <li><b>Travelers:</b> $travelers</li>
                <li><b>Phone:</b> $phone</li>
            </ul>
            <p>We’ll contact you soon.</p>
        ";

        $mail->send();
    } catch (Exception $e) {
        error_log("Email not sent: {$mail->ErrorInfo}");
    }

    echo json_encode([
        'success' => true,
        'message' => "Booking confirmed successfully! A confirmation email has been sent to $email.",
        'bookingId' => $bookingId
    ]);

} else {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
