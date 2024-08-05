<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
include('updateorderstable.php');
include('notificationstock.php');
session_start();

if (!isset($_SESSION['sid'])) {
    die("Error: Supplier not logged in.");
}

$sid = $_SESSION['sid'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correcting the JOIN syntax and query structure
$stmt = $conn->prepare("SELECT users.uid, users.u_name, users.phone_no, users.u_address, product.prod_name, product.price, orders.oid, orders.quantity
    FROM users 
    JOIN orders ON users.uid = orders.uid 
    JOIN product ON orders.pid = product.pid 
    WHERE orders.sid = ? and orders.availability IS NULL ");
$stmt->bind_param("i", $sid);
$stmt->execute();
$result = $stmt->get_result();

$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="supplierdashboardstyle.css" />
    <title>Supplier Dashboard</title>
    <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <form method="post" id="signoutform">
                    <button class="button-ghost" id="signOutButton" type="button" onclick="submitForm('signoutsupplier.php')">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" color="#007562">
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
            </div>
        </div>
        <div class="main">
            <div class="dashboard-header">
                <h2>Supplier Dashboard</h2>
            </div>
            <div class="inbox">
                <h2>Order Request</h2>
                <?php if (!empty($orders)) : ?>
                    <?php foreach ($orders as $order) : ?>
                        <div class="product-card">
                            <div class="product-info">
                                <div>
                                    <p class="product-name"><?php echo htmlspecialchars($order['prod_name']); ?></p>
                                    <p class="product-details">Quantity: <?php echo htmlspecialchars($order['quantity']); ?></p>
                                    <p class="product-details">Price: <?php echo htmlspecialchars($order['price']); ?>/unit</p>
                                    <p>Order By:</p>
                                    <p class="product-details">Name: <?php echo htmlspecialchars($order['u_name']); ?></p>
                                    <p class="product-details">Address: <?php echo htmlspecialchars($order['u_address']); ?></p>
                                    <p class="product-details">Phone No: <?php echo htmlspecialchars($order['phone_no']); ?></p>
                                </div>
                            </div>
                            <div class="actions">
                                <form method="post">
                                    <input type="hidden" name="oid" value="<?php echo htmlspecialchars($order['oid']); ?>">
                                    <input type="hidden" name="uid" value="<?php echo htmlspecialchars($order['uid']); ?>">
                                    <button class="button outline" name="status" type="submit" value="false">Not Available</button>
                                    <button class="button solid" name="status" type="submit" value="true">Available</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No orders to display.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>