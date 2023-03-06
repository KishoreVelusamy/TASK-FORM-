<?php

$bike=array("Honda","Royal Enfield","Yamaha","KTM");

rsort($bike);

$length=count($bike);

for($i=0;$i<$length;$i++){
    echo $bike[$i];
    echo "<br>";
}


?>