<?php
    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
    session_start();
    include('appointment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="professionalprofilestyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
</head>
<body>
<header class="nav-header">
        <nav>
          <div class="nav-bar">
            <span class="nav-img">
              <img
                src="/GHAR_1/gharimg/ghar.png"
                alt=" Ghar logo"
                width="100px"
              />
            </span>

            <ul class="navbar-menu">
              <li>
                <a class="get-ideas" href="/GHAR_1/indexnavbar_pages/getideas.php"
                  >Get Ideas
                </a>
              </li>
              <li>
                <a class="shop-product" href="/GHAR_1/indexnavbar_pages/Shopnow.php">Shop Products</a>
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
                <a class="cart-move" href="/GHAR_1/indexnavbar_pages/usercart.php">
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
              <div class="notification-dropdown">
                <button class="notidropdown-toggle">
                  <svg
                    width="35px"
                    height="35px"
                    fill="#000000"
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 24 24"
                    xml:space="preserve"
                  >
                    <style type="text/css">
                      .st0 {
                        fill: none;
                      }
                    </style>
                    <g id="surface1">
                      <path
                        d="M12,2c-0.8,0-1.5,0.7-1.5,1.5v0.7C7.3,4.9,5,7.6,5,11v4.5l-2,2.3V19h18v-1.2l-2-2.3V11c0-3.4-2.3-6.1-5.5-6.8V3.5
		C13.5,2.7,12.8,2,12,2z M10,20c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2H10z"
                      />
                    </g>
                    <rect class="st0" width="24" height="24" />
                  </svg>
                </button>

                <div class="notidropdown-content">
                  <span>Notification</span>
                </div>
              </div>
            </div>

            <div class="menu-container">
              <div class="dropdown">
               <a href="/GHAR_1/dashboards/userdashboard.php"><button class="dropdown-trigger">
                  <svg
                    fill="#000000"
                    width="35px"
                    height="35px"
                    viewBox="0 0 512 512"
                    id="_x30_1"
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                  >
                    <path
                      d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,90  c37.02,0,67.031,35.468,67.031,79.219S293.02,248.438,256,248.438s-67.031-35.468-67.031-79.219S218.98,90,256,90z M369.46,402  H142.54c-11.378,0-20.602-9.224-20.602-20.602C121.938,328.159,181.959,285,256,285s134.062,43.159,134.062,96.398  C390.062,392.776,380.839,402,369.46,402z"
                    />
                  </svg>
                </button></a>
              </div>
            </div>
          </div>
        </nav>
      </header>
    <main class="container">
        <?php
      
        require('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
            $prid = htmlspecialchars($_GET['id']);
            echo $prid;
            $stmt = $conn->prepare("SELECT prof_name, prof_image, experience, phone_no,prof_email, operating_area FROM professionals WHERE prid = ?");
            $stmt->bind_param("i", $prid);
            $stmt->execute();
            $result = $stmt->get_result();


            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = htmlspecialchars($row['prof_name']);
                $image_path = str_replace('C:/xampp/htdocs/', '', $row['prof_image']);
                $experience = htmlspecialchars($row['experience']);
                $phone = htmlspecialchars($row['phone_no']);
                $email = htmlspecialchars($row['prof_email']);
                $operating_area = htmlspecialchars($row['operating_area']);
            } else {
                echo "No profile found.";
                exit();
            }
       
        ?>

        <section>
            <div class="profile-section">
                <div class="image-container">
                    <img class="avatar-image" src="/<?php echo $image_path; ?>" alt="Profile banner" />
                </div>
                <div class="actions">
                    <button type="button" class="appointment-button">Book Appointment</button>
                    <div id="appointment-modal" class="modal">
                    <div class="modal-content">
                     <span class="close">&times;</span>
                    <h2>Book Appointment</h2>
                    <form method="post">
                        <?php
                            $prid = htmlspecialchars($_GET['id']);
                            echo '<input type="hidden" name="prid" value="' . $prid . '">';
                        ?>
                    <label for="appointment-date">Select Date:</label>
                    <input type="date" name="date" id="appointment-date" min="<?php echo date('Y-m-d'); ?>">
                    <label for="appointment-time">Select Time Slot:</label>
                    <select id="appointment-time"name="time">
                      <option value="09:00-10:00">09:00-10:00</option>
                      <option value="10:00-11:00">10:00-11:00</option>
                      <option value="11:00-12:00">11:00-12:00</option>
                      <option value="12:00-1:00">12:00-1:00</option>
                      <option value="1:00-2:00">1:00-2:00</option>
                      <option value="2:00-3:00">2:00-3:00</option>
                      <option value="3:00-4:00">3:00-4:00</option>
                      <option value="4:00-5:00">4:00-5:00</option>
                      <option value="5:00-6:00">5:00-6:00</option>
                  </select>
                  <label for="message" class="label">Request For:</label>
                  <textarea id="message" class="textarea" placeholder="Enter your message" name="message"></textarea>
                  <button type="submit" id="confirm-appointment">Confirm Appointment</button>
                  </form>             
                </div>
          </div>
          </div>
            <script src="appiontmentscript.js"></script>
        </div>
        </section>

       


        <section>
            <div class="header">
                <div class="profile-info">
                    <div class="avatar">
                        <img class="avatar-img" src="/<?php echo $image_path; ?>" alt="Profile banner" />

                    </div>
                    <div class="profile-details">
                        <div class="profile-name"><?php echo $name; ?></div>
                        <div class="text-sm mt-1"><?php echo $operating_area; ?></div>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="per-section">
    <div class="details-info">
        <h2>Personal Details</h2>
        <div class="info-group">
            <div class="info-item">
                <h3>Full Name</h3>
                <p><?php echo $name; ?></p>
            </div>
            <div class="info-item">
                <h3>Experiences</h3>
                <p><?php echo $experience; ?> years</p>
            </div>
        </div>
        <div class="info-group">
            <div class="info-item">
                <h3>Phone Number</h3>
                <p><?php echo $phone; ?></p>
            </div>
        </div>
        <div class="info-item">
            <h3>Email</h3>
            <span><?php echo $email; ?></span>
        </div>
        <div class="info-item">
            <h3>Operating Area</h3>
            <span><?php echo $operating_area; ?></span>
        </div>
    </div>
</section>

    </main>
</body>
</html>