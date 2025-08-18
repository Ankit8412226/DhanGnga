<?php
session_start(); // Start the session

$servername = "localhost";
$username = "nayesoc1_karan";
$password = "g%?ZJ3-m8fMd";
$dbname = "nayesoc1_main";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize input
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate input to prevent SQL injection
    if (!empty($username) && !empty($password)) {
        // Prepare SQL query
        $sql = "SELECT id, username FROM users WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check for valid credentials
        if ($result->num_rows > 0) {
            // Fetch user data
            $user = $result->fetch_assoc();

            // Set session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to view_sms.php
            header("Location: view_sms.php");
            exit();
        } else {
            // Invalid credentials: Show an alert
            echo "<script>alert('Invalid username or password');</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        // Input validation failed
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

// Close connection
$conn->close();
?>
