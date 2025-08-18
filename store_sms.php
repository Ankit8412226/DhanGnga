<?php
// Database configuration
$host = 'localhost';
$db = 'nayesoc1_main';
$user = 'nayesoc1_karan';
$password = 'g%?ZJ3-m8fMd';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Log the error and respond with a generic message
    error_log("Database connection failed: " . $e->getMessage());
    header('Content-Type: application/json');
    http_response_code(500); // Internal Server Error
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit;
}

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get raw POST input
    $input = file_get_contents('php://input');
    $data = json_decode($input, true); // Decode JSON payload

    // Validate input data
    $sender = isset($data['sender']) ? filter_var($data['sender'], FILTER_SANITIZE_STRING) : 'Unknown Sender';
    $message = isset($data['message']) ? filter_var($data['message'], FILTER_SANITIZE_STRING) : 'No Message';

    if (empty($sender) || empty($message)) {
        // Respond with a bad request error
        header('Content-Type: application/json');
        http_response_code(400); // Bad Request
        echo json_encode(["status" => "error", "message" => "Sender or message cannot be empty."]);
        exit;
    }

    try {
        // Insert SMS data into the database
        $stmt = $pdo->prepare("INSERT INTO sms_messages (sender, message) VALUES (:sender, :message)");
        $stmt->bindParam(':sender', $sender, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();

        // Successful response including received data
        header('Content-Type: application/json');
        echo json_encode([
            "status" => "success",
            "message" => "SMS stored successfully.",
            "data" => [
                "sender" => $sender,
                "message" => $message
            ]
        ]);
    } catch (PDOException $e) {
        // Log the error and respond with a generic message
        error_log("Failed to store SMS: " . $e->getMessage());
        header('Content-Type: application/json');
        http_response_code(500); // Internal Server Error
        echo json_encode(["status" => "error", "message" => "Failed to store SMS."]);
    }
} else {
    // Respond with method not allowed
    header('Content-Type: application/json');
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Only POST requests are allowed."]);
}
?>
