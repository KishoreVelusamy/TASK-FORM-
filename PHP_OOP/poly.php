<!DOCTYPE html>  
<html>  
<body>  
  
<?php  


 
class new_Shape    
  
{    
function draw(){

}    
}    




class Circle extends new_Shape    
{    
function draw()    
{    
print " the function executed properly and Circle has been drawn . </br> ";    
}    
}    




class Triangle extends new_Shape    
{    
function draw()    
{    
print " the function executed properly and Triangle has been drawn . </br> ";    
}    
} 


 
class Square extends new_Shape    
{    
function draw()    
{    
print "the function executed properly and Square has been drawn . ";    
}    
}  


     
 
    
$Val[0] = new Circle();    
$Val[1] = new Triangle();    
$Val[2] = new Square();    
    
for($i=0;$i<3;$i++)    
{    
$Val[$i]->draw();    
}    
?>   
</body>  
</html>