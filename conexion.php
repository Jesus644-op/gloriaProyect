<?php
$host = 'localhost';
$db = 'gloria_web';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>