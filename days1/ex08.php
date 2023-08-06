<?php 
  // 내장함수
  // 사용자 정의 함수
  
  
  $money = 3000;
  echo number_format($money);
  echo "<br>";


// 함수 설정.
  function kong() {
    echo "여기는 콩입니다"; 
    return 3;
  }
   
  $ans = kong();
  echo $ans;
  echo "<br>";

  function addNumber ($a, $b){
      $answer = $a + $b;
      return $answer;
  }

  echo addNumber(10,30);

  echo "<br>";

?>