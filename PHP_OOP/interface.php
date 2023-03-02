<?php

interface Car{

    public function model($md);
    public function year($yr);
    public function color($cl);
}

class details implements Car{
    public function model($md){
        echo "The car Model is: ".$md."<br>";
    }
    public function year($yr){
        echo "Manufactured year is: ".$yr."<br>";
    }
    public function color($cl){
        echo "The car color is: ".$cl."<br>";
    }
}

$obj= new details();
$obj->model("XUV");
$obj->year("2022");
$obj->color("WHITE");


?>