<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');

function addNotification($user_id, $message) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO notifications (user_id, message) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $message);
    $stmt->execute();
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operation = $_POST['operation'];
    $user_id = $_POST['uid']; // Get user ID from form
    $message = "Your appointment request has been " . (($operation === 'true') ? "accepted" : "declined") . ".";

    addNotification($user_id, $message);
}
?>
