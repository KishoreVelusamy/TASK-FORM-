<?php

interface Car{

    public function model($md);
    public function year($yr);
    public function color($cl);
}

interface Car1 extends Car{

    public function name($nm);
    public function mileage($ml);
    public function mode($md);
}

class details implements Car1{
    public function model($md){
        echo "The car Model is: ".$md."<br>";
    }
    public function year($yr){
        echo "Manufactured year is: ".$yr."<br>";
    }
    public function color($cl){
        echo "The car color is: ".$cl."<br>";
    }
    public function name($nm){
        echo "The car name is: ".$nm."<br>";
    }
    public function mileage($ml){
        echo "Mileage: ".$ml."Km <br>";
    }
    public function mode($md){
        echo "Driving Mode: ".$md."<br>";
    }
    
}

$obj= new details();
$obj->model("XUV");
$obj->year("2022");
$obj->color("WHITE");
$obj->name("FORTUNER");
$obj->mileage("9");
$obj->mode("4x4");

echo"<hr>";
?>