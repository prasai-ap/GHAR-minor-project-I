<?php
function addNotification($user_id, $message) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO notifications (user_id, message) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $message);
    $stmt->execute();
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = $_POST['status'];
    $user_id = $_POST['uid']; // Get user ID from form
    $message = "Your order product is " . (($status === 'true') ? "available" : "not availabel") .".";

    addNotification($user_id, $message);
}
?>