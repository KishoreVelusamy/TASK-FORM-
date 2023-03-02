<?php
$file=fopen("delete.txt","w");
echo fwrite($file,"Hello Peter...!!!");
fclose($file);


// unlink("delete.txt");
?>