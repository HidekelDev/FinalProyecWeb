<?php
$host = 'sql108.infinityfree.com';
$db = 'if0_39601014_dblibreria1';
$user = 'if0_39601014';
$pass = 'Hidekel2912';
try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error en la conexión: " . $e->getMessage());
}
?>
