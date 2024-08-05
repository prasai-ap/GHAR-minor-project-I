<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $prid=$_POST['prid'];
  $stmt = $conn->prepare("DELETE from professionals where prid=?");
  $stmt->bind_param("i",$prid );
  $stmt->execute();  
}

?>