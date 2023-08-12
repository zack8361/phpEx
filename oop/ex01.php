<?php


// 클래스 선언.
class Friut
{
  public $name;
  public $color;

  // 생성자 constructer -> new 키워드를 통해 인스턴스를 생성 할때 자동으로 호출되는 메서드.
  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  function get_name()
  {
    return $this->name;
  }

  function get_color()
  {
    return $this->color;
  }
}
$apple = new Friut("사과", "빨강");
$banana = new Friut("바나나", "노랑");

echo "이 과일의 이름은 " . $apple->get_name();
echo "이고, 색깔은" . $apple->get_color();

echo "<h1> 그리고!!!!!!</h1>";
echo "이 과일의 이름은" . $banana->get_name() . "이고 색깔은? " . $banana->get_color();