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
    // Log the error and show a generic message
    error_log("Database connection failed: " . $e->getMessage());
    die("Failed to connect to the database.");
}

// Fetch SMS messages from the database
try {
    $stmt = $pdo->query("SELECT id, sender, message, received_at FROM sms_messages ORDER BY received_at DESC");
    $smsMessages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Failed to fetch SMS messages: " . $e->getMessage());
    die("Failed to fetch SMS messages.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS View Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>SMS Messages</h1>

    <?php if (!empty($smsMessages)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sender</th>
                    <th>Message</th>
                    <th>Received At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smsMessages as $sms): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($sms['id']); ?></td>
                        <td><?php echo htmlspecialchars($sms['sender']); ?></td>
                        <td><?php echo htmlspecialchars($sms['message']); ?></td>
                        <td><?php echo htmlspecialchars($sms['received_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No SMS messages found.</p>
    <?php endif; ?>
</body>
</html>
