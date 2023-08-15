<?php

include_once "./db.php";

$email = $_POST['email'];



$sql = "SELECT count(*) AS cnt from user WHERE EMAIL = '$email'";
// db 연결을 conn으로 해서.ㄴ
try {
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $row = $stmt->fetch();
  $arr = array("result" => $row['cnt'] ? "exist" : "not_exist");

  die(json_encode($arr));
} catch (Exception $e) {
  echo "연결잘못되었음";
}