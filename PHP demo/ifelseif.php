<?php

$a=389;
$b=457;
$c=394;
$d=874;


if($a>$b && $a>$c && $a>$d)
{
    echo "A is greater";
}
else{ if($b>$c && $b>$d){
    echo "B is greater";
}
else{
    if($c>$d){
        echo "C is greater";
    }
    else{
        echo "D is greater";
    }
}
    
}

?>