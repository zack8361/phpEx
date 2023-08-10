<?php

class Car
{
  private static $count = 0;
  private $name;

  function __construct($name)
  {
    $this->name = $name;
    self::$count = self::$count + 1;
  }
  function message()
  {
    echo $this->name . "가 생산 되었습니다.";
    echo self::$count;
    echo "<br>";
  }
}

$car1 = new Car("아우디");
$car1->message();

$car2 = new Car("소나타");
$car2->message();