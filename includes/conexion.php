<?php
$host = 'localhost';
$db = 'dblibreria1';
$user = 'root';
$pass = 'root';
try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error en la conexión: " . $e->getMessage());
}
?>
