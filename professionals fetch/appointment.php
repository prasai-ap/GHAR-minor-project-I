<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        header("Location: /GHAR_1/authentication/Signin.php");
        exit();
    }

    include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');

    $uid = $_SESSION['user_id'];
    $prid = $_POST['prid'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message=$_POST['message'];

    $stmt = $conn->prepare("INSERT INTO appointment (uid, prid, a_date, a_time,message) VALUES (?, ?, ?, ?,?)");
    $stmt->bind_param("iisss", $uid, $prid, $date, $time,$message);

    if ($stmt->execute()) {
        echo "Appointment booked successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>