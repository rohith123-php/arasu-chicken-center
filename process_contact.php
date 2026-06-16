<?php
header('Content-Type: application/json');
// Simulate a brief delay to show loading state on frontend
sleep(1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    // Basic validation
    if (empty($name) || empty($phone) || empty($message)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please fill out all required fields.'
        ]);
        exit;
    }
    // Prepare data to save
    $timestamp = date("Y-m-d H:i:s");
    $logEntry = "[$timestamp] Name: $name | Phone: $phone | Message: $message" . PHP_EOL;
    $logFile = 'inquiries.txt';
    // In a real application, you might save to a database or send an email here.
    // For this demonstration, we'll append it to a text file.
    
    if (file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) !== false) {
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your inquiry! We will contact you soon.'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Failed to save inquiry. Please contact us directly.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
?>
