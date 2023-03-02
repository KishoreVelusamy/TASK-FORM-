<?php

abstract class person{
    abstract function display($s);
}
class child1 extends person{
    function display($s){
        echo "$s<br>";
    }
}
class child2 extends person{
    function display($s){
        echo "$s<br>";
    }
}
class child3 extends person{
    function display($s){
        echo "$s<br>";
    }
}


$obj=new child1();
$obj->display("CHILD 1");
$obj1=new child2();
$obj1->display("CHILD 2");
$obj2=new child2();
$obj2->display("CHILD 2");
?>