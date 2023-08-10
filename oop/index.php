<?php
//  클래스 정의
class Fruit
{ // Properties
  public $name;
  public $color;

  // Method 정의 공간.(set)
  function set_name($name)
  {
    $this->name = $name;
  }
  // Method 정의 공간.(get)
  function get_name()
  {
    return $this->name;
  }
  function set_color($color)
  {
    $this->color = $color;
  }
  function get_color()
  {
    return $this->color;
  }
}
$apple = new Fruit();
$banana = new Fruit();

// setName 을 통한 저장.
$apple->set_name("사과");
$banana->set_name("바나나");

$red = new Fruit();
$blue = new Fruit();

$red->set_color("빨간색");
$blue->set_color("파란색");

// getName 을 통한 저장 불러오기.
echo "<h1>저장된" . $red->get_color() . $apple->get_name() . "</h1>";
echo "<br>";
echo "<h1>저장된" . $blue->get_color() . $banana->get_name() . "</h1>";