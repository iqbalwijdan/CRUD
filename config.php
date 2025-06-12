<?php
$host = "sql309.infinityfree.com";
$user = "if0_39182241";
$pass = "iqbal1603";
$db   = "if0_39182241_crud";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
