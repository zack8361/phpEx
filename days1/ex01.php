<?php 
$txt1 = "Learn PHP";
$x = 5;
$y = 10;

echo "<h2s>".$txt1."</h2s>";
echo $x + $y;


// 어떠한 변수의 자료형을 확인 할 수 있다. var_dump
$x = "3333";
echo"<br>";
var_dump($x);


// strlen() => 문자열의 byte 반환
$kong = "나는 콩이야";
$x_len = strlen($kong);
echo "<br>";
echo $x_len;

echo "<br>";

// 단어 수 세기 (영어 만 가능 이게뭐냐 ) str_word_count();
echo str_word_count("im kong");

echo "<br>";

// 문자열 뒤집는 함수 strrev(영어만 가능한듯 도);
echo strrev("hello young");

echo "<br>";
echo "hi";

// 문자열 인덱스 찾는 함수 strpos -> 개인적으로 필요없어보임
$a = strpos("hello world", "world");

echo $a;
?>
