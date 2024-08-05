<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();

$user_id = $_SESSION['user_id']; // Assuming user ID is stored in session

$stmt = $conn->prepare("SELECT * FROM notifications WHERE user_id = ? AND is_read = 0 ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row['message'];
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Notifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #e0f7fa;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        p {
            text-align: center;
            font-size: 1.2em;
            color: #666;
        }
    </style>
    <script type="text/javascript">
        function displayNotifications(notifications) {
            if (notifications.length > 0) {
                let message = "You have new notifications:\n\n";
                notifications.forEach(notification => {
                    message += "- " + notification + "\n";
                });
                alert(message);
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Your Notifications</h1>
        <?php if (empty($notifications)) : ?>
            <p>No new notifications.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($notifications as $notification) : ?>
                    <li><?php echo htmlspecialchars($notification); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <script type="text/javascript">
        const notifications = <?php echo json_encode($notifications); ?>;
        displayNotifications(notifications);
    </script>
</body>
</html>

<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');

$stmt = $conn->prepare("UPDATE notifications SET is_read = 1 WHERE user_id = ? AND is_read = 0");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->close();
$conn->close();
?>
