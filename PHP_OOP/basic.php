<?php

class Person {
    public $name;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function get() {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.<br>";
    }
}
 $Obj1 = new Person("Tom", 22);
 $Obj1->get();
 $Obj2 = new Person("Jerry", 15);
 $Obj2->get();
?>