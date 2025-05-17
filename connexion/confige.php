<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_livraison2";
try {
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $_SESSION["conn"]= $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
