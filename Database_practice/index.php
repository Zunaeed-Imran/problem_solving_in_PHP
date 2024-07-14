<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Class Practice</title>
</head>

<body class="bg-gray-400	">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="space-y-12 bg-center pl-28 pt-5">
    <input type="text" placeholder="Name" name="user"><br>
    <input type="number" placeholder="Age" name="age"><br>
    <input type="number" placeholder="Mobile" name="mobile"><br>
    <input type="submit" name="submit" class="rounded-full bg-fuchsia-600 p-2">
  </form>
</body>

</html>

<?php
include '3_database_class.php';



?>