<?php

// 정적 메소드 생성과 접근 방식.

User::pwd_string();

class User
{
  static function pwd_string()
  {
    echo "please enter your password";
  }
}