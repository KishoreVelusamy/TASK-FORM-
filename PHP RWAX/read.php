<?php
$myfile = fopen("sample11.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sample.txt"));
fclose($myfile);
echo"read()";


function read(){
if(!file_exists("sample11.txt")) {
  die("File not found");
} else {
  $myfile=fopen("sample11.txt","r");
}
}



?>

?>