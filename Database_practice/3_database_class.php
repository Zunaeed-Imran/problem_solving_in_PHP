<?php
// question:  Make a class, that connect with database and will do something, like (insert, delete, update, etc).


class Database{

  public function connect(){
     new mysqli("localhost", "root", "", "class_practice");
  }
}

$connect = new Database();
$connect->connect();

if($connect){
  echo "databse connect";
}else{
  echo "Not Connected to database";
}

?>