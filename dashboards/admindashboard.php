<?php
    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
    session_start();
    if (!isset($_SESSION['aid'])) {
      header("location:/GHAR_1/authentication/adminsignin.php");
  }
    $stmt = $conn->prepare("SELECT prid, prof_name, prof_role, operating_area, phone_no FROM professionals");
    $stmt->execute();
    $result = $stmt->get_result();

    $Professionals = [];
    while ($row = $result->fetch_assoc()) {
        $Professionals[] = $row;
    }

    $stmt = $conn->prepare("SELECT pid, prod_name, price,prod_category FROM product");
    $stmt->execute();
    $result = $stmt->get_result();

    $products=[];
    while ($row = $result->fetch_assoc()){
        $products[] = $row;

    }

    $stmt = $conn->prepare("SELECT f_name, message FROM feedback");
    $stmt->execute();
    $result = $stmt->get_result();

    $feedbacks=[];
    while ($row = $result->fetch_assoc()){
        $feedbacks[] = $row; 
    }
    $stmt->close();
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admindashstyle.css" >
    <link rel="website icon" type="png" href="/WEB/GHAR/gharimg/ghar.png" />
  </head>
  <body>
    <div class="dashboard">
      <div class="sidebar">
        <div class="sidebar-header">
          <a href="#" class="sidebar-link">
            <svg
              class="icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
              <path
                d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"
              ></path>
              <path d="M12 3v6"></path>
            </svg>
            Admin Dashboard
          </a>
        </div>
        <nav class="sidebar-nav">
          <a href="#user-issues" class="sidebar-link">
            <svg
              class="icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            User Issues
          </a>
          <a href="#customer-service" class="sidebar-link" id="customer-service-link">
            <svg
              class="icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            Customer Service
          </a>
          <div id="customer-service-dropdown" class="dropdown-section1">
            <form class="add-professional-form">
              <a href="\GHAR_1\registration\addprofessionals.php"><h3>Add New Professional</h3></a>
              <a href="/GHAR_1/registration/addsupplier.php"><h3>Add New Suppiler</h3></a>
              <a href="/GHAR_1/registration/adminreg.php"><h3>Add Admin</h3></a>
              </form>
            </div>
            <script src="addprofessionals.js"></script>         
            <script src="addsupplier.js"></script>
            <script src="add admin.js"></script>
          <a href="#product-inventory" class="sidebar-link" id="product-inventory-link">
            <svg
              class="icon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m7.5 4.27 9 5.15"></path>
              <path
                d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"
              ></path>
              <path d="m3.3 7 8.7 5 8.7-5"></path>
              <path d="M12 22V12"></path>
            </svg>
            Product Inventory
          </a>
          <div id="product-inventory-dropdown" class="dropdown-section1">
            <form class="add-product-form">
              <a href="\GHAR_1\add product\addproduct.php"><h3>Add New Product</h3></a>
            </form>
          </div>
          <script src="addproduct.js"></script>
        </nav>
      </div>
      <nav>
        
      </nav>
      <form method="post" id="signoutform">
                  <button class="button-ghost" id="signOutButton" type="button" onclick="submitForm('adminsignout.php')">
                    <svg
                      class="h-4 w-4"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>
                  </button>
                </form>
            
            <script>
              function submitForm(action) {
                var form = document.getElementById('signoutform');
                form.action = action;
                form.submit();
              }
            </script>
      <main>
        <section id="user-issues-section">
          <div class="container">
            <div class="card" id="user-issues-card">
              <h2>User Issues</h2>
              <input
                type="text"
                class="input"
                placeholder="Search user problems..."
              />
              <?php foreach($feedbacks as $feedback) :?>
              <div class="table-container">
                <table class="table"id="user-issues-table">
                  <thead>
                    <tr>
                     
                      <th>Description</th>
                      <th>User Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo htmlspecialchars($feedback['message']); ?></td>
                      <td><?php echo htmlspecialchars($feedback['f_name']); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="card" id="customer-service-card">
              <h2>Customer Service Professionals</h2>
              <table class="table" id="customer-service-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Expertise</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  <?php endforeach; ?>
                </thead>
                <tbody>
                <?php foreach($Professionals as $Professional) :?>
                  <tr>
                    <td><?php echo htmlspecialchars($Professional['prof_name']); ?></td>
                    <td><?php echo htmlspecialchars($Professional['phone_no']); ?></td>
                    <td><?php echo htmlspecialchars($Professional['prof_role']); ?></td>
                    <td><span class="badge green">Active</span></td>
                    <td class="flex">
                      <form method="post" action="removeprofbutton.php">
                        <input type="hidden" name="prid" value="<?php echo htmlspecialchars($Professional['prid']); ?>">
                        <button class="button button-outline"type="submit" >Remove</button>
                      </form>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            

            <div class="card" id="product-management-card">
              <h2>Product Management</h2>
              <div class="table-container" >
                <table class="table" id="product-management-table">
                
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Actions</th>
                    </tr>
                    <?php foreach ( $products as  $product) : ?>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo htmlspecialchars($product['prod_name']); ?></td>
                      <td><?php echo htmlspecialchars($product['prod_category']); ?></td>
                      <td><?php echo htmlspecialchars($product['price']); ?></td>
                      <td class="flex">
                        <form method="post" action="prodremovebutton.php">
                        <input type="hidden" name="pid" value="<?php echo htmlspecialchars($product['pid']); ?>">
                        <button class="button button-outline btn-remove" type="submit">Remove</button>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <script src="/WEB/GHAR/adminremupd.js"></script>
  </body>
</html>