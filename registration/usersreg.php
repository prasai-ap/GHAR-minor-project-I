<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
include('usersignupbackend.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="userloginstyle.css">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>Register</h1>
        <p>Create your account to get started.</p>
      </div>
    <form class="form" method="POST">
      <div class="form-group">
        <div class="input-group">
          <label for="first-name">First Name</label>
          <input  type="text" id="first-name" name="fname" placeholder="Fname"  required>
        </div>
        <div class="input-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="lname" placeholder="Lname" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <label for="gender">Gender</label>
          <select id="gender" name="gender" required>
            <option value="">Select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Other</option>
          </select>
        </div>
      </div>
      <div class="input-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" placeholder="Location" required></textarea>
      </div>
      <div class="input-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone No" required>
      </div>
      <div class="form-group">
        <div class="input-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="example@example.com" required>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" required>
        </div>
        <div class="input-group">
          <label for="confirm-password">Confirm Password</label>
          <input id="confirm-password" type="password" required>
          <span id="password_error"></span>
        </div>
      </div>
      <button type="submit" onclick="pass_validate()" class="submit-button">Register</button>
  </form>

  <script>
    function pass_validate() {
      var password = document.getElementById("password").value;
      var con_password = document.getElementById("confirm-password").value;
      if (con_password != password) {
        document.getElementById("password_error").innerHTML = "Password doesn't match";
      }
    }
  </script>
  </body>
</html>