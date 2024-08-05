<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Concatenate first name and last name
    $u_name = $first_name . ' ' . $last_name;

    // Hash the password for security
    $hashed_password = bcrypt_hash($password);

    // Database connection (assuming $conn is defined elsewhere in your script)
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (u_name, u_email, phone_no, u_address, u_password, gender) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $u_name, $email, $phone, $address, $hashed_password, $gender);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Signup successful!";
        header("Location: \GHAR_1\authentication\Signin.php");
        exit(); // Make sure to exit after the header redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

function bcrypt_hash($password) {
    $options = ['cost' => 10];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
?>
