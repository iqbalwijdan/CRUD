<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $conn->query("INSERT INTO employees (name, email, phone) VALUES ('$name','$email','$phone')");
  header("Location: index.php");
}
?>
<form method="POST">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Phone: <input type="text" name="phone"><br>
  <input type="submit" value="Save">
</form>
