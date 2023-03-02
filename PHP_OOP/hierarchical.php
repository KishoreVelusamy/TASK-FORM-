<?php

class Greeting{
   function welcome($str){
     echo "Hello, We welcome you $str <br>";
   }
}
 
class Teacher extends Greeting{
      
   
}
 
class Student extends Greeting{
 
   
}

//Teacher class
$teacher = new Teacher;
$teacher->welcome("Sir");


//Student class
$student =new Student;
$student->welcome("dear");

?>