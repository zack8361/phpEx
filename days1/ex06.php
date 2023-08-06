<?php 

  $arr = ["이용준", "콩희진", "이찬호"];

  foreach($arr AS $person){
    echo $person." ";
  }

  echo "<br>";

  $arr2 = array(
      1 => "이용준",
      2 => "콩희진",
      3 => "이찬호"
  );

  foreach ($arr2 as $key => $value) {
    echo "<h1> $key  $value</h1>";
  }
  

  
?>