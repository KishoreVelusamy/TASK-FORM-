<?php

class person{
    public $name;
    public $age;

    function set($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function get(){
        echo "NAME: ".$this->name." and AGE is: ".$this->age."<br>";
    }

}
$obj= new person();
$obj->set("KISHORE",22);
$obj->get();

?>