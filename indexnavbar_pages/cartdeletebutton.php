<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $uid = $_SESSION['user_id'];
    $pid = $_POST['pid'];

    // Prepare and execute SQL statement to add item to cart
    $stmt = $conn->prepare("DELETE FROM cart WHERE uid=? AND pid=?");
    $stmt->bind_param("ii", $uid, $pid);

    if ($stmt->execute()) {
        //successful execution
        header("location: usercart.php");
    } else {
        // Display error message on failure
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
?>
