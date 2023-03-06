<?php

$choco=array("Milkybar","Diarymilk","Eclairs","Alphenlibe");

sort($choco);

$length=count($choco);

for($i=0;$i<$length;$i++){
    echo $choco[$i];
    echo "<br>";
}


?>