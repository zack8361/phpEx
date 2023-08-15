<?php

include_once "./db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$encrypted_password = strtoupper(hash("sha256", $password));
$username = $_POST['username'];


// 단방향 알고리즘 -> 해시 단방향 알고리즘 사용 복호화 불가능.
echo $encrypted_password;
$sql = "INSERT INTO user(EMAIL,PASSWORD,NAME) VALUES('$email' ,'$encrypted_password','$username')";
try {
} catch (PDOException $e) {
  echo "회원가입 쿼리 실패하였습니다";
  echo $e->getMessage();
}