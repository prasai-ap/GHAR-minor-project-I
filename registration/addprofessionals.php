<?php
    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
    include('addprofessionalsbackend.php');
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="addprofessionals.css">
    </head>

    <body>
        <div class="container" id="signup">
            <h1 class="title">Register Now</h1>
            <form method="post" enctype="multipart/form-data">

                <div class="input-text">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="First Name" name="fname" id="fname" required>
                    <label for="fname"> First Name</label>
                </div>

                <div class="input-text">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                    <label for="lname"> Last Name</label>
                </div>

                <div class="input-text">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
                    <label for="phone">Phone Number</label>
                </div>

        <table>
                <tr>
                    <td>
                <div class="input-text">
                    <!-- <i class="fas fa-tag"></i> -->
                    <select name="role" id="role" required>
                        <option value="" disabled selected>Select your role</option>
                        <option value="Architect">Architect</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Contractor">Contractor</option>
                        <option value="Plumber">Plumber</option>
                        <option value="Carpenter">Carpenter</option>
                        <option value="Electrician">Electrician</option>
                        <option value="Painter">Painter</option>
                        <option value="Other">Other</option>
                    </select>
                    <!-- <label for="role">Role</label> -->
                </div>
                    </td>
            </tr>
        </table>

                <div class="qua-text">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" placeholder="Qualification" name="qualification" id="qualification" required>
                    <label  for="qualification">Qualification</label>
                </div>

                <div class="input-text">
                    <i class="fas fa-briefcase"></i>
                    <input type="text" placeholder="Experience" name="experience" id="experience" required>
                    <label for="experience">Experience</label>
                </div>

                <div class="input-text">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" placeholder="Operating Area" name="operating_area" id="operating_area" required>
                    <label for="operating_area">Operating Area</label>
                </div>
                <div class="input-text">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-text">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-text">
                    <i class="fas fa-image"></i>
                    <input type="file" name="prof_image" id="prof_image" accept="image/*" required>
                    <label for="prof_image">Image</label>
                <div class="btn">
                    <button class="button" type="submit" id="btn"> Sign up</button>
                    <!-- <input type="submit" class="btn" value="Sign up" name="signUp"> -->
                </div>
            </form>
            <!-- <div class="blank1"></div>
            <p class="or">-----------------------Or----------------------</p>
            <div class="blank1"></div>
            <div class="icons">
            <div class="google">
                <i class="fab fa-google"></i>
            </div>
            <div class="apple">
                <i class="fab fa-apple"></i>
            </div>
            </div>
        </div> -->
        <!-- <script src="signup.js"></script> -->
    </body>

    </html>