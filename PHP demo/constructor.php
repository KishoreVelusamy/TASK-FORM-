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
$obj= new person("KISHORE",22);
$obj->get();
$obj1= new person("JAY KRISHNAN",22);
$obj1->get();
$obj2= new person("RUBAN",22);
$obj2->get();

?>