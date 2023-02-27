<?php

$key=$_POST['username'];
$value=$_POST['password'];
setcookie($key,$value,time()+60,"/");

if(isset($_COOKIE[$key])){
    echo"COOKIE is not set";
}
else{
   echo"COOKIE is set "; 
}
?>