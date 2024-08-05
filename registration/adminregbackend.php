<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    // Hash the password for security
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    // Database connection (assuming $conn is defined elsewhere in your script)
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO admin (a_name,a_password) VALUES (?, ?)");
    $stmt->bind_param("ss", $name,$hashed_password,);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Admin regestered";
        header("location:/GHAR_1/dashboard/admindashboard.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
