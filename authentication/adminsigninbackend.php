<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query based on selected user type
   
    $stmt = $conn->prepare("SELECT aid,a_password FROM admin WHERE a_name = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($admin_id,$hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Success
            echo "Login successful!";
            // Redirect or start session, etc.
            $_SESSION['aid'] = $admin_id;
            $_SESSION['email'] = $email;
            header("Location:\GHAR_1\dashboards\admindashboard.php"); // Redirect to a admin's dashboard
            exit();
        
        } else {
            // Invalid password
            echo "Invalid password.";
        }
    } else {
        // Invalid email
        echo "Admin Not found.";
    }

    $stmt->close();
}

$conn->close();
?>
