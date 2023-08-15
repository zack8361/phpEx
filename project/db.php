<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  echo "db 접근 성공";
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}