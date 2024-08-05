<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();
include('C:\xampp\htdocs\GHAR_1\product_fetch\add to chart\addtochart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chair</title>
    <link rel="stylesheet" href="chair_fetchstyle.css">
    <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="body">
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
              <a class="find-pro" href="\GHAR_1\professionals fetch\fetch_professional.php"
                  >Find Professionals</a
                >
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

<section class="background" id="background">
</section>

<div class="blank"></div>

<section class="features" id="features">
  <div class="heading">
    <h2 class="heading">Furniture</h2>
    <div class="blank1"></div>
    <p>Chair</p>
  </div>  
  <div class="blank"></div>
  <div class="container">
    <?php
    // Fetch Cement from the database
    $stmt = $conn->prepare("SELECT product.pid, product.sid, product.prod_name, product.price, product.p_image, product.prod_category,supplier.s_name FROM product join supplier on product.sid=supplier.sid  WHERE product.prod_category = ?");
    $category = "Chair";
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        // Adjust the image path
        $image_path = str_replace('/xampp/htdocs/', '', $row['p_image']);
        
        echo '<div class ="furniture-container">';
        echo '<div class="box">';
        echo '<img src="/' . htmlspecialchars($image_path) . '" alt="Sofa Image">';
        echo '<p>' . htmlspecialchars($row['prod_name'])  . '</p>';
        echo '<p>' . htmlspecialchars($row['s_name'])  . '</p>';
        echo '<span class="Price">Rs.' . htmlspecialchars($row['price']) . '</span>';
        echo '<div class="getstart">';
        echo '<form method="post">';
        echo '<input type="hidden" name="pid" value="' . htmlspecialchars($row['pid']) . '">';
        echo '<input type="hidden" name="sid" value="' . htmlspecialchars($row['sid']) . '">';
        echo '<input type="hidden" name="quantity" value="1">';
        echo '<div class="Cart">';
        echo '<button class="button-cart" type="submit">Add to Cart</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
    ?>
  </div> 
</section> 
 <!--                                               FOOTER SECTION                                                                 -->
 <footer class="footer">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="/GHAR_1/gharimg/ghar.png" alt="Ghar logo" width="100px" />
            <a href="/GHAR_1/dashboards/userdashboard.php" class="ghar-ho"><p>Ghar</p></a>
          </div>
          <div class="footer-links">
            <div>
              <h3>Explore</h3>
              <a target="_blank" href="/GHAR_1/product_fetch/Sofa_fetch.php">Sofa</a>
              <a target="_blank" href="/GHAR_1/product_fetch/Table_fetch.php">Table</a>
              <a target="_blank" href="/GHAR_1/product_fetch/Chair_fetch.php">Chairs</a>
              <a target="_blank" href="/GHAR_1/product_fetch/Cement_fetch.php">Cement</a>
            </div>
            <div>
              <h3>Professionals</h3>
              <a target="_blank" href="/GHAR_1/professionals fetch/fetch_professional.php">Find Professionals</a>
            </div>
            <div>
              <h3>Company</h3>
              <a target="_blank" href="\GHAR_1\Footer_pages\aboutghar.php">About Ghar</a>
              <a  target=”_blank”  href="\GHAR_1\Footer_pages\career.php">Careers</a>
              <a target="_blank" href="\GHAR_1\Footer_pages\Contact.php">Contact Us</a>
            </div>
            <div>
              <h3>Help</h3>
              <a target="_blank" href="\GHAR_1\Footer_pages\customersupport.php">Customer Support</a>
              <a target="_blank" href="\GHAR_1\Footer_pages\faq.php">FAQ</a>
              <a target="_blank" href="\GHAR_1\Footer_pages\termsofuse.php">Terms of Use</a>
              <a target="_blank" href="\GHAR_1\Footer_pages\privacypolicy.php">Privacy Policy</a>
            </div>
          </div>
          <div class="footer-social">
            <a href="https://www.facebook.com/" class="facebook">
              <svg
                width="25px"
                height="25px"
                viewBox="0 0 266.895 266.895"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M252.164 266.895c8.134 0 14.729-6.596 14.729-14.73V14.73c0-8.137-6.596-14.73-14.729-14.73H14.73C6.593 0 0 6.594 0 14.73v237.434c0 8.135 6.593 14.73 14.73 14.73h237.434z"
                  fill="#4267B2"
                />
                <path
                  d="M184.152 266.895V163.539h34.692l5.194-40.28h-39.887V97.542c0-11.662 3.238-19.609 19.962-19.609l21.329-.01V41.897c-3.689-.49-16.351-1.587-31.08-1.587-30.753 0-51.807 18.771-51.807 53.244v29.705h-34.781v40.28h34.781v103.355h41.597z"
                  fill="#ffffff"
                />
              </svg>
            </a>
            <a href="#" class="twitter">
              <svg
                fill="black"
                class="svgIcon"
                xmlns="http://www.w3.org/2000/svg"
                width="25px"
                height="25px"
                viewBox="0 0 564 564"
              >
                <path
                  d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                ></path>
              </svg>
            </a>
            <a href="https://www.instagram.com/" class="instagram">
              <svg
                width="25px"
                height="25px"
                viewBox="0 0 3364.7 3364.7"
                xmlns="http://www.w3.org/2000/svg"
              >
                <defs>
                  <radialGradient
                    id="0"
                    cx="217.76"
                    cy="3290.99"
                    r="4271.92"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset=".09" stop-color="#fa8f21" />
                    <stop offset=".78" stop-color="#d82d7e" />
                  </radialGradient>
                  <radialGradient
                    id="1"
                    cx="2330.61"
                    cy="3182.95"
                    r="3759.33"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop offset=".64" stop-color="#8c3aaa" stop-opacity="0" />
                    <stop offset="1" stop-color="#8c3aaa" />
                  </radialGradient>
                </defs>
                <path
                  d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9"
                  fill="url(#0)"
                />
                <path
                  d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9"
                  fill="url(#1)"
                />
                <path
                  d="M1269.25,1689.52c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7-416.6-186.59-416.6-416.7m-225.26,0c0,354.5,287.36,641.86,641.86,641.86s641.86-287.36,641.86-641.86-287.36-641.86-641.86-641.86S1044,1335,1044,1689.52m1159.13-667.31a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M1180.85,2707c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27S2059.13,666,2191,672c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M1170.5,447.09c-133.07,6.06-224,27.16-303.41,58.06-82.19,31.91-151.86,74.72-221.43,144.18S533.39,788.47,501.48,870.76c-30.9,79.46-52,170.34-58.06,303.41-6.16,133.28-7.57,175.89-7.57,515.35s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43s139.14,112.18,221.43,144.18c79.56,30.9,170.34,52,303.41,58.06,133.35,6.06,175.89,7.57,515.35,7.57s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2586.8,537.06,2504.71,505.15c-79.56-30.9-170.44-52.1-303.41-58.06C2068,441,2025.41,439.52,1686,439.52s-382.1,1.41-515.45,7.57"
                  fill="#ffffff"
                /></svg></a>
          </div>
          <p class="terms">
            By signing up, you agree to our
            <a  target=”_blank”  href="\GHAR_1\Footer_pages\Termsofservice.php" class="link"
              >Terms of Service</a
            >.
          </p>
          <p>&copy; 2024 GHAR. All rights reserved.</p>
        </div>
      </footer>
</div>
</body>
</html>
