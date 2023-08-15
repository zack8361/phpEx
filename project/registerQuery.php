<?php

include './inc/db.php';
include "./inc/member.php";
$mem = new Member($db);

// isset nullable 체크.
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : '';

// 단방향 알고리즘 + 대문자 화 시킴 -> 복호화 불가능 패스워드 적용.
$encrypted_password = strtoupper(hash("sha256", $password));

$arr  = [
  'email' => $email,
  'password' => $password,
  'username' => $username,
];

try {
  $mem->register($arr);
} catch (PDOException $e) {
  echo $e->getMessage();
}