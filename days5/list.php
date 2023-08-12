<?php


include './dbAOP.php';

$sql = "SELECT * FROM member";
$stmt = $conn->prepare($sql);

// 쿼리문 실행 하는곳
$stmt->execute();
// data 를 필드명으로 받아오는 함수
$resStmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border = '1'>";
foreach ($resStmt as $value) {
  echo "<tr>
    <td>" . $value['id'] . "</td>
  </tr>";
}
echo "</table>";