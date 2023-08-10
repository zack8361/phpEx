<?php

// 클래스 상수

class Base
{
  // js 과 동일한 방식이다.
  const Age = 21;
  public $mustOlderThan = 21;

  public function kong()
  {
    echo $this->mustOlderThan;
    echo self::Age;
  }
}


// const 로 정의된것은 인스턴스 생성 없이 접근 가능하다.
echo Base::Age;

// 인스턴스를 생성해야지 접근이 가능한 모습.
$object = new Base();
echo $object->mustOlderThan;