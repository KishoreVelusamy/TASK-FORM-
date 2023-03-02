<?php

$myfile = fopen("sample1.txt", "w") or die("Unable to open file!");

$txt = "For The GREAT KARIKALAN Magic show";

fwrite($myfile, $txt);

fclose($myfile);

?>