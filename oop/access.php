<?php


class Fruit
{
  public $name;
  protected $color;
  private $weight;

  function set_name($name)
  {
    $this->name = $name;
  }

  protected function set_color($color)
  {
    $this->color = $color;
  }

  private function set_weight($weight)
  {
    $this->weight = $weight;
  }
}
$mango = new Fruit();
// 접근 가능 public
$mango->set_name("망고");
// 접근 불가 protected
$mango->set_color("주황");
// 접근 불가 privated
// $mango->set_weight("10k");