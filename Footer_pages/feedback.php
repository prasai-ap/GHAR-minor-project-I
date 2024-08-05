<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $message=$_POST['message'];
    $stmt = $conn->prepare("INSERT INTO feedback (f_name, message) VALUES (?,?)");
    $stmt->bind_param("ss",$name,$message);
    $stmt->execute();
    $stmt->close();
}