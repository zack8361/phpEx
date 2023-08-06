<?php 

  $a = 10;
  while($a != 0){
    echo "<h1> $a 출력 </h2>";
    $a--;
  }


  echo "<br>"; 

  for($a = 10; $a>=0; $a--){
    echo "<h1> $a 출력 </h1>";
  }

  echo "<br>";

  $arr = array("사과", "바나나", "딸기", "오렌지");
  
  foreach($arr AS $fruit ){
    echo "<h1> $fruit </h1>";
  }
  

?>
