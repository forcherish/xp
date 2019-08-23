<?php

class Animal {
// 公有的   public
//私有的   private

    private $name; 

    public $age;

    public $foot;
    
    // public function __construct($name,$age,$foot){
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->foot = $foot;
    // }

    public function jiao()
    {
        # code...
        echo "我叫 $this->name ";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
}