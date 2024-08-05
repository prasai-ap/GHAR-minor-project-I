<?php
// Ensure this code is only executed when the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Start session if not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check if user is signed in
    if (!isset($_SESSION['user_id'])) {
        header("Location: /GHAR_1/authentication/Signin.php");
        exit();
    }

    // Retrieve form data
    $uid = $_SESSION['user_id'];
    $pid = $_POST['pid'];
    $sid = $_POST['sid'];
    $quantity = $_POST['quantity'];

    // Prepare and execute SQL statement to add item to cart
    $stmt = $conn->prepare("INSERT INTO cart (uid, pid, quantity, sid) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiii", $uid, $pid, $quantity, $sid);

    if ($stmt->execute()) {
        
        echo("succesfully added to cart");
    } else {
        // Display error message on failure
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
?>
