<?php


// Mysqli 절차 지향 방식.

use CodeIgniter\CLI\Console;

$servrname = "localhost";
$username = "root";
$password = "123123123";

$conn = mysqli_connect($servrname, $username, $password);


// 부정문 먼저쓰네 
if (!$conn) {
  die("DB 연결에 실패하였스빈다");
}

echo "DB 연결에 성공하였습니다.";