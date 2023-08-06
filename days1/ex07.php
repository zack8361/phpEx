<?php 

  for ($i=0; $i <10; $i++) { 
      echo "<h1>이번 숫자는 $i 입니다.</h1>";
      if($i == 4){
        continue;
      }
      else if($i == 9){
        $i +=1;

        echo "<h1>프로그램이 종료됩니다 .....   다음에 올 숫자는 $i 입니다 </h1>";
        break;
      }
  }

?>