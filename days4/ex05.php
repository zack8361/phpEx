<?php

class Car
{
  private $count = 0;
  private $name;

  // 매개변수로 받는 name
  function __construct($name)
  {
    $this->name = $name;
    $this->count = $this->count + 1;
  }
  function message()
  {
    echo "<p>" . $this->name . "가 생산 되었습니다</p>";
    echo "<p>" . $this->count . "번쨰";
  }
}



// 인스턴스 생성후 -> 볼보 삽입
$p1 = new Car("볼보");
$p1->message();

// 인스턴스 생성후 -> 아우디 삽입
$p2 = new Car("아우디");
$p2->message();