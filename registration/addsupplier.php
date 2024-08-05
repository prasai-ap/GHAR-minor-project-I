<?php
    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
    include('addsupplierbackend.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Registration</title>
    <style>
      /* styles.css */
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f5f5f5;
    background-image: url('/WEB/GHAR/gharimg/supplier-background.jpg');
    background-size: cover;
}

.card {
    width: 100%;
    max-width: 400px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.card-header {
    margin-bottom: 20px;
}

.card-title {
    font-size: 1.5em;
    margin-bottom: 5px;
}

.card-description {
    color: #777;
    font-size: 0.9em;
}

.card-content {
    margin-bottom: 20px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 0.9em;
    margin-bottom: 5px;
}

input {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.card-footer {
    display: flex;
    justify-content: center;
}

.register-button {
    width: 100%;
    padding: 10px;
    background-color: #007562;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.register-button:hover {
   color: #007562;
   background-color: #ffffff;
   border: 1px solid #007562;
}

    </style>
</head>
<body>
    <form method="post">    
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Supplier Registration</h2>
                <p class="card-description">Fill out the form below to register your company as a supplier at GHAR.</p>
            </div>
            <div class="card-content">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="example@company.com">
                    </div>
                    <div class="form-group">
                        <label for="company-name">Company Name</label>
                        <input id="company-name" name="company-name" placeholder="Nepal Electronics">
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password"name="password" type="password">
                    </div>
                    <div class="form-group">
                        <label for="business-category">Business Category</label>
                        <input id="business-category" name="business-category" type="text">
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input id="location" name="location" placeholder="Balkot, Bhaktapur">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input id="phone" name="phone" placeholder="Telephone No">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="register-button" type="submit">Register</button>
            </div>
        </div>
    </form>
</body>
</html>