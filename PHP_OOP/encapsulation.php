<?php  



class person  

{  

public $name;  
public $age;  
function __construct($n, $a)  
{  
$this->name=$n;  
$this->age=$a;  
}  


public function display()  

{  
   
echo  "welcome ".$this->name."<br/>";  
   
return $this->age;  
   
}  
   
}  
  
$person=new person("Dilipii",28);
   
   
echo "You are ".$person->display()." years old";  
   
?>  