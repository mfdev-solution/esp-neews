<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn;
try {
   $conn = new PDO("mysql:host=$servername;dbname=tp", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
}
