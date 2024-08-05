<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
include('profsigninbackend.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>professional Signin</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  <link rel="stylesheet" href="profsigninstyle.css">
  <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
</head>
<body>
  <div class="pro-body">
  <header class="nav-header">
      <nav>
        <div class="nav-bar">
          <span class="nav-img">
            <a href="/GHAR_1/indexghar.php">
              <img
                src="/GHAR_1/gharimg/ghar.png"
                alt=" Ghar logo"
                width="100px"
              />
            </a> 
          </span>

          <ul class="navbar-menu">
            <li>
              <a class="get-ideas" href="/WEB/GHAR/getideas.html"
                >Get Ideas
              </a>
            </li>
            <li>
              <a class="find-pro" href="professionals.html"
                >Find Professionals</a
              >
            </li>
            <li>
              <a class="shop-product" href="furniture.html">Shop Products</a>
            </li>
          </ul>

          <div class="nav-search">
            <input placeholder="Search" class="search-input" />

            <div class="search-icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>

          <div class="nav-third">
            <span class="cart-icon">
              <a class="cart-move" href="/WEB/GHAR/Cart.html">
                <?xml version="1.0" encoding="utf-8"?>

                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg
                  width="35px"
                  viewBox="0 0 14 14"
                  role="img"
                  focusable="false"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g transform="translate(.13043484 .04347832) scale(.28986)">
                    <g fill="#333333">
                      <path
                        d="M18 32c-1.1 0-2-.9-2-2V20h-4v10c0 3.3 2.7 6 6 6h19v-4H18z"
                      />

                      <path
                        d="M12.8 10l-.4-1.3C11.8 7.1 10.3 6 8.6 6H5v4h3.6l5.5 16.6c.3.8 1 1.4 1.9 1.4h19c.8 0 1.5-.5 1.8-1.2L44.4 10H12.8z"
                      />
                    </g>

                    <circle cx="5" cy="8" r="2" fill="#00695c" />

                    <g fill="#333333">
                      <circle cx="34" cy="39" r="3" />

                      <circle cx="19" cy="39" r="3" />
                    </g>

                    <g fill="#333333">
                      <circle cx="34" cy="39" r="1" />

                      <circle cx="19" cy="39" r="1" />
                    </g>
                  </g>
                </svg>
                Cart
              </a>
            </span>
          </div>

          <div class="nav-forth">
            <a href="/WEB/GHAR/Signin.html">
              <span class="signin-icon">
                <?xml version="1.0" encoding="utf-8"?>
                <svg
                  width="35px"
                  fill="#333"
                  viewBox="0 0 32 32"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z"
                  />
                </svg>
                Sign In
              </span>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <section class="pro-container">
      <video src="/GHAR_1/gharimg/professionalback.mp4" width="100%" height="100%" autoplay loop muted>
      </video>
      <div class="container">
        <div class="header">
          <h1>One simple solution for contractors and design pros</h1>
          <p>Attract and win better clients, run profitable projects and deliver a standout customer experience - all in one place.</p>
        </div>
        <form class="form" method="post">
          <label for="signinEmail" class="sr-visually-hidden ">Email</label>
          <input type="text" autofocus="" class="pro-signupinput" id="signinEmail" placeholder="Your Email" name="email">
          <label for="password" class="sr-visually-hidden ">Password</label>
          <input type="password" autocomplete="new-password" class="pro-signuppass" id="password" placeholder="Password" name="password">
          <button class="btn-email" type="submit">
            <span class=" btn-text-l">Sign In</span>
          </button>
        </form>
    </section>
  </div>
</body>
</html>