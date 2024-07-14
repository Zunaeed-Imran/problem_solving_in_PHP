<?php

include '3_database_class.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['user'];
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];

  $sql = "INSERT INTO `classTest1` (`user`, `age`, `mobile`) VALUES ('$user', '$age', '$mobile')";

  if ($this->connect()->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $this->connect()->error;
  }
}



?>