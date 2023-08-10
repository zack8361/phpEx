<?php

use CodeIgniter\CLI\Console;

$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  echo "<p>DB 연결에 성공하였습니다. </p>";
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}



$conn = null;