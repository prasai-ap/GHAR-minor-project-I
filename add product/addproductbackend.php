<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $prod_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $prod_category = $_POST['prod_category']; 

    $target_dir = "/xampp/htdocs/GHAR_1/product_fetch/Productimage/";
    $target_file = $target_dir . basename($_FILES["prod_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Debugging: Check if the directory exists and is writable
    if (!is_dir($target_dir)) {
        echo "The directory does not exist.";
        exit;
    }
    if (!is_writable($target_dir)) {
        echo "The directory is not writable.";
        exit;
    }

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["prod_image"]["tmp_name"]);
    if($check !== false) {
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            exit;
        }

        // Check file size (limit to 5MB)
        if ($_FILES["prod_image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            exit;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        // Try to upload file
        if (move_uploaded_file($_FILES["prod_image"]["tmp_name"], $target_file)) {
            // File is uploaded, insert data into database
            $stmt = $conn->prepare("INSERT INTO product (prod_name, price, p_image, prod_category) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sdss", $prod_name, $price, $target_file, $prod_category);

            if ($stmt->execute()) {
                echo "The product has been uploaded successfully.";
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
}

$conn->close();
?>
