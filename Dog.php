<?php
require_once "Animal.php";

class Dog extends Animal{

    //类的静态属性和方法
    private static $number = 0;

    public static function getNumber() {
        return self::$number;
    }

    //对象的
    public $color;

    public function __construct()
    {
        echo "我构造了一个对象<br>";
        self::$number++;
    }
    
    public function __destruct() {
        echo "我死了";
        self::$number--;
    }
    public function jiao() {
        echo "汪汪汪";
    }
}