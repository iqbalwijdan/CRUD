<?php
include 'config.php';
$result = $conn->query("SELECT * FROM employees");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Details</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Employee <span>Details</span></h2>
  <a class="add-btn" href="insert.php">+ Add New</a>
  <table>
    <tr>
      <th>Name</th><th>Email Address</th><th>Phone</th><th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td>
        <a href="update.php?id=<?= $row['id'] ?>" class="edit">&#9998;</a>
        <a href="delete.php?id=<?= $row['id'] ?>" class="delete">&#128465;</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>
