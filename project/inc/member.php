<?php

class Member
{
  private $conn;

  // 생성자를 통해 db 접근.
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function register($marray)
  {
    var_dump($marray);
  }
  public function login($id, $pwd)
  {
    var_dump($id);
  }
}