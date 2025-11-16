<?php
require_once __DIR__ . '/config.php';
$conn = getDBConnection();

$feedback = $_POST['feedback'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO feedback (message, user_feedback) VALUES (?, ?)");
$stmt->bind_param("ss", $message, $feedback);
$stmt->execute();
$stmt->close();

echo "Feedback received!";
?>
