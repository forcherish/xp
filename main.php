<?php
require_once "Dog.php";

// $kitty = new Dog();
// $kitty->setName("kitty");
// $kitty->jiao();

$kitty = new Dog();
$miccy = new Dog();
$tom = new Dog();

echo Dog::getNumber();
unset($tom);
echo Dog::getNumber();

echo "<br><br><br><br><br><br><br><br><br><br><br>";