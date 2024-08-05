<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oid = $_POST['oid'];
    $status = $_POST['status'];

    if ($status === 'true' || $status === 'false') {
        $availability = $status;
    } else {
        echo "Invalid operation.";
        exit();
    }
    $stmt = $conn->prepare("UPDATE orders set availability=? where oid=?");
    $stmt->bind_param("si",$status,$oid);
    $stmt->execute();
}
?>