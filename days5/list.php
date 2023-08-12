<?php


include './dbAOP.php';


$sql = "SELECT * FROM member";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll();

var_dump($rs);