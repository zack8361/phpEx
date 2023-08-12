<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "db 접근에 성공하였습니다.";
} catch (PDOException $e) {
  echo $e->getMessage();
  echo "<br>";
  echo "db 접속에 실패하였습니다";
}