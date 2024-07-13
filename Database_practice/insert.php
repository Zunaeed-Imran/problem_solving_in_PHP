<?php

include '3_database_class.php';

if(isset($_POST)){
  $user = $_POST['user'];
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];
  
  $query = "INSERT INTO `classTest1` (`user`, `age`, `mobile`) VALUES ('$user', '$age', '$mobile')";
  mysqli_query($connect, $query);
}



?>