<?php



//numeric with bool output
$x=543;
var_dump(is_numeric($x));  //bool-true
echo"<br>";


//integer with bool
$exmp=3456;
var_dump(is_int($exmp));   //bool-true
echo"<br>";


$exmp="3456";
var_dump(is_int($exmp));   //bool-false 
echo"<br>";


$exmp1="3456";
var_dump(is_numeric($exmp1)); //bool-true
echo"<br>";


$exmp01="3456";
$exmp02=1234;
$sum="$exmp01"+$exmp02;
echo $sum;
echo"<br>";
var_dump(is_integer($sum));  //bool-true
?>