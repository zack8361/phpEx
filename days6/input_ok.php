<?php

include 'db.php';

$subject = $_POST['subject'];
$content = $_POST['content'];

try {
  $sql = "INSERT INTO board(subject,content,rdate) VALUES ('{$subject}','{$content}',NOW()";
  $conn->exec($sql);
  echo "게시물 업로드 성공";
} catch (PDOException $e) {
  echo $e->getMessage();
}

$conn = null;