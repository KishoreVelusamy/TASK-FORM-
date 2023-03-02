<?php

class person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function get(){
        echo "Name: ".$this->name." and the Age is: ".$this->age."<br>";
    }
}
class age1 extends person{
    function message(){
        echo "Is the age is above the 18?";
    }

}

$obj=new age1("Ram",17);
$obj->get();
$obj->message();



?>