<?php


//outside the class
class person{
    const a=" A PERSON"; 
    }
    echo person::a;




    //inside the class
class person1{
    const b=" B PERSON";
    function message(){
        echo self::b;
    }
    }

    $obj=new person1();
    $obj->message();



?>