<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query based on selected user type
    $stmt = $conn->prepare("SELECT prid, prof_password FROM professionals WHERE prof_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($prof_id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Success
            $_SESSION['prof_id'] = $prof_id;
            $_SESSION['email'] = $email;
            header("Location: /GHAR_1/dashboards/professionaldashboard.php"); // Redirect to a user's dashboard
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
