<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $pid = $_POST['pid'];
    $quantity = $_POST['quantity'];
    $sid = $_POST['sid'];
    $uid = $_SESSION['user_id'];

    // Prepare and execute SQL statement to add item to orders
    $stmt = $conn->prepare("INSERT INTO orders (uid, pid, quantity, sid) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiii", $uid, $pid, $quantity, $sid);

    if ($stmt->execute()) {
        // Prepare and execute SQL statement to delete item from cart
        $stmt = $conn->prepare("DELETE FROM cart WHERE uid = ? AND pid = ?");
        $stmt->bind_param("ii", $uid, $pid);

        if ($stmt->execute()) {
            // Close statement
            $stmt->close();
            // Close the database connection
            $conn->close();
            // Redirect to cart page
            header("Location: usercart.php");
            exit(); // Ensure no further code is executed after the redirect
        } else {
            // Display error message on failure
            echo "Error: " . $stmt->error;
        }
    } else {
        // Display error message on failure
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>