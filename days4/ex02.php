<?php

// 생성자 get method 호출 방식.

$object = new User;
$object->password = "paul2858";

echo $object->get_password();
class User
{
  public $name, $password;

  function get_password()
  {
    return $this->password;
  }
}