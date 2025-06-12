<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $conn->query("UPDATE employees SET name='$name', email='$email', phone='$phone' WHERE id=$id");
  header("Location: index.php");
}
?>
<form method="POST">
  Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
  Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
  Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"><br>
  <input type="submit" value="Update">
</form>
