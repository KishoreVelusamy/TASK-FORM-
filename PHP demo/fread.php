<?php

$myfile=fopen("file.txt","r") or die("UNABLE TO OPEN THE FILE");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);


?>