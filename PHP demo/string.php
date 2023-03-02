<?php

$x="Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience";

$search=array("Laravel","provide");
$replace=array("This","gives");
echo "Strings before replacement: <br>";
echo "<br>";
echo $x;
echo"<hr>";


echo "<br>";
$x1=str_replace($search,$replace,$x,$count);


echo "Strings after replacement: <br>";
echo "<br>";
echo $x1;
echo"<hr>";

echo "<br>";
echo "<br>";
echo "No of replacement:=".$count;
echo"<hr>";


echo "<br>";
echo "Total length is:".strlen($x);
echo"<hr>";


echo "<br>";
echo "The reversed string is: <br><br>".strrev($x1);
echo"<hr>";


echo "<br>";
echo "The strpos func:".strpos("$x","beauty");
echo"<hr>";



echo "<br>";
echo "Total word count is:".str_word_count("$x");
echo"<hr>";
?>