<?php

include '3_database_class.php';

$user = $_REQUEST['user'];
$age = $_REQUEST['age'];
$mobile = $_REQUEST['mobile'];

$sql = "INSERT INTO `classTest1` (`user`, `age`, `mobile`) VALUES ('$user', '$age', '$mobile')";

if(isset($_REQUEST['submit'])){
  mysqli_query($this->connect(), $sql);
  header('location:index.php');
}




?>