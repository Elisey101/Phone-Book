<?php
  require_once '../config/connect.php';
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  if($name != null && $phone != null) {
    mysqli_query($connect, "INSERT INTO `contacts` (`Name`, `Phone`) VALUES ('$name', '$phone')");
  }

  header('location: ../index.php');
?>