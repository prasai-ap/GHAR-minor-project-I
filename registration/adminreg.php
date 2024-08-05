<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
include('adminregbackend.php');
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
        <p>Admin</p>
      </div>
    <form class="form" method="POST">
      <div class="form-group">
        <div class="input-group">
          <label for="name">Name</label>
          <input  type="text" id="first-name" name="name" placeholder="Userame"  required>
        </div>
      <div class="form-group">
        <div class="input-group">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" required>
        </div>
      <button type="submit" class="submit-button">Register</button>
  </form>

  </body>
</html>