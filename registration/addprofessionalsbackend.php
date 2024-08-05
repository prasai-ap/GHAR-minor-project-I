<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $operating_area = $_POST['operating_area'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $target_dir = "C:/xampp/htdocs/GHAR_1/prof_image/";
    $target_file = $target_dir . basename($_FILES["prof_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    $proff_name = $fname . ' ' . $lname;

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the file is uploaded
    if (isset($_FILES['prof_image']) && $_FILES['prof_image']['error'] == UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES["prof_image"]["tmp_name"]);
        if ($check !== false) {
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                exit;
            }

            // Check file size (limit to 5MB)
            if ($_FILES["prof_image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                exit;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                exit;
            }

            // Try to upload file
            if (move_uploaded_file($_FILES["prof_image"]["tmp_name"], $target_file)) {
                // File is uploaded, insert data into database
                // Prepare and bind the SQL statement
                $stmt = $conn->prepare("INSERT INTO professionals (prof_name, prof_role, qualification, experience, operating_area, phone_no, prof_email, prof_password, prof_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $proff_name, $role, $qualification, $experience, $operating_area, $phone, $email, $hashed_password, $target_file);

                if ($stmt->execute()) {
                    echo "The professional has been uploaded successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "No file was uploaded or there was an upload error.";
    }
}

$conn->close();
?>
