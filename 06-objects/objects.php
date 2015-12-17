<?php

class Dog {
  public $age;
  public $name;

  public function __construct($a = 1, $n = 'Fido') {
    $this->age = $a;
    $this->name = $n;
  }
}

class Husky extends Dog {
  public $eyeColor;

  public function __construct($a, $n, $ec) {
    parent::__construct($a, $n);
    $this->eyeColor = $ec;
  }
}


$myDog = new Dog(5, 'Fluffy');
print $myDog->name . "\n";

$myOtherDog = new Dog();
print $myOtherDog->name . "\n";

$myHusky = new Husky(8, 'Bob', 'blue');
print $myHusky->age . "\n" . $myHusky->name . "\n" . $myHusky->eyeColor;

?>


