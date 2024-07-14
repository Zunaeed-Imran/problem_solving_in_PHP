<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Practice</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="Name" name="user"><br>
    <input type="number" placeholder="Age" name="age"><br>
    <input type="number" placeholder="Mobile" name="mobile"><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
include '3_database_class.php';



?>