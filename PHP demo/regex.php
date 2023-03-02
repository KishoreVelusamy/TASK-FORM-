<?php

//Preg match
$alpha="I LOVE INDIA";
$pattern="/INDIA/i";

echo preg_match($pattern,$alpha);
echo"<br>";



//preg match all

$emp1="PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.";
$pattern1="/in/i";


echo preg_match_all($pattern1,$emp1);
echo"<br>";



//preg replace 
$emp1="PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.";

$pattern2="/PHP/i";


echo preg_replace($pattern2,"Php:Hypertext Preprocessor",$emp1);



?>