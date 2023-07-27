<?php
  require_once '../config/connect.php';
  $id = $_GET['id'];

  mysqli_query($connect, "DELETE FROM `contacts` WHERE `contacts`.`id` = '$id' ");
  if($contacts == null) mysqli_query($connect, "ALTER TABLE `contacts` AUTO_INCREMENT = 0;");
  
  header('location: ../index.php');
?>