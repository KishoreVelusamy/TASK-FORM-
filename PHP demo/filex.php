<?php

$myfile=fopen("file.php","a") or die("UNABLE TO OPEN THE FILE");
$content1="<?php echo 'Welcome to K Universe';\n";
fwrite($myfile,$content1);
$content2="echo 'File to be test'; ?>";
fwrite($myfile,$content2);
fclose($myfile);


?>