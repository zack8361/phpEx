<?php

//1번쨰 방식 MySQLi OOP

// dbServer가 Local 에 존재한다.
$servername = "localhost";
// db Default = root
$username = "root";
// pw Default = ";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  echo "DB 연결에 실패하였습니다.";
  exit;
}

echo "DB 연결에 성공하였습니다";