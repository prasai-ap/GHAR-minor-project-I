<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prid = $_POST['prid'];
    $uid=$_POST['uid'];
    $operation = $_POST['operation'];

    if ($operation === 'true' || $operation === 'false') {
        $acceptance = $operation;
    } else {
        echo "Invalid operation.";
        exit();
    }
    $stmt = $conn->prepare("UPDATE appointment set acceptance=? where prid=? and uid=?");
    $stmt->bind_param("sii",$acceptance,$prid,$uid);
    $stmt->execute();
}   
?>