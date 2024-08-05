<?php
  include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
  include('signinbackend.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signin</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="signinstyle.css">
  </head>
  <body>
    <div class="signin-body">
      <header>
        <nav>
          <div class="ghar-header">
            <div class="container">
              <a href="/GHAR_1/indexghar.php">
                <img
                  class="ghar-logo"
                  src="/GHAR_1/gharimg/ghar.png"
                  width="150px"
                  height="150px"
                />
              </a>
              <div><hr></div>
            </div>
          </div>
        </nav>
      </header>

      <main>
        <div class="signin">
          <section>
          <form method="POST" action="signinbackend.php">
            <div class="sigin-container">
              <h1 class="head">Ghar Login</h1>
              <div class="blank"></div>
                <div class="log-container">
                  <div class="username-container">
                    <span>Username</span>
                    <div>
                        <input class="username-input" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="password-container">
                    <span>Password</span>
                    <div>
                      <input class="username-input" type="password" name="password">
                    </div>
                  </div>
                <div class="tick"></div>
                <div>
                    <input class="sign-submit" type="submit" value="Sign In" />
                </div>
            </div>
        </div>
    </form>  
        </div>
        </div>
      </main>
    </div>
  </body>
</html>
