<?php

use CodeIgniter\CLI\Console;

$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  echo "DB 연결 성공";
} catch (PDOException $e) {
  echo $e->getMessage();
}