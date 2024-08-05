<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching form data
    $email = $_POST['email'];
    $name = $_POST['company-name'];
    $password = $_POST['password'];
    $category=$_POST['business-category'];
    $location=$_POST['location'];
    $phone=$_POST['phone'];
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO supplier (s_name, s_address,contact_no,s_password,s_email,category) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $location, $phone, $hashed_password, $email, $category);

    if ($stmt->execute()) {
        echo "The Supplier has been uploaded successfully.";
    } else {
            echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
