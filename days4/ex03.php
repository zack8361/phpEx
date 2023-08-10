<?php
// 상수 선언 ->  define 함수로 전역 상수를 정의한 것과 같은 방법으로 클래스 내에 상수를 만들수 있따.


Translate::lookup();


class Translate
{
  const ENGLISH = 0;
  const SPANISH = 1;
  const FREANCH = 2;
  const GERMAN = 3;

  static function lookup()
  {
    echo self::ENGLISH;
  }
}