<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to select necessary columns
    $stmt = $conn->prepare("SELECT sid, s_name, s_address, contact_no, s_password, s_email, category FROM supplier WHERE s_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($sid, $s_name, $s_address, $contact_no, $hashed_password, $s_email, $category);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Success
            $_SESSION['sid']=$sid; 
            $_SESSION['s_email']=$s_email;
            header("Location: /GHAR_1/dashboards/supplierdashboard.php"); // Redirect to a user's dashboard
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