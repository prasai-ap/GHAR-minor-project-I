<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query based on selected user type
   
        $stmt = $conn->prepare("SELECT uid,u_password FROM users WHERE u_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id,$hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Success
            echo "Login successful!";
            // Redirect or start session, etc.
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            header("Location:\GHAR_1\dashboards\userdashboard.php"); // Redirect to a user's dashboard
            exit();
        
        } else {
            // Invalid password
            echo "Invalid password.";
        }
    } else {
        // Invalid email
        echo "No user found with this email.";
    }

    $stmt->close();
}

$conn->close();
?>
