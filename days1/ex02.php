

<?php 

// str_replace ("바꿀 문자열" , "바뀔 문자열" , "문자열 대상");
$str = "나는 자랑스러운 한국인입니다.";
$str1 = str_replace("한국인","미국인",$str);
echo $str;
echo "<br>";
echo $str1;

echo "<br>";
// 문자열, 정수형 판별하기.
$x = 33.4;
if(is_int($x)){
  echo "이것은 정수입니다.";
}
else if(is_string($x)){
  echo "이것은 정수가 아닌 문자열 입니다..";
}
else{
  echo "이것은 아무것도아닙니다.";
}

echo "<br>";
// 숫자형이냐 문자열이냐 판별 하는 것. -> 실무에서 가장 많이쓰인다. 이유는 아직모름

$num = "123123";
if(is_numeric($num)){
    echo "이것은 숫자 입니다.";
}
else{
    echo "이것은 숫자가 아닙니다.";
}

echo "<br>";

// 큰숫자 작은 숫자 판별식 매우 간편하다.

echo (max(1,2,3,4,5,6,7,1,10));
echo "<br>";
echo (min("-1",2,2,3,3,"2"));
?>
