<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
if (isset($_POST['pid'])) {
  $pid=$_POST['pid'];
  $stmt = $conn->prepare("DELETE from product where pid=?");
  $stmt->bind_param("i",$pid );
  $stmt->execute();
  header("location:admindashboard.php");  
}

?>