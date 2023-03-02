<!DOCTYPE html>
<head>

<style>
    *{
        color:green;
    }
    body{
        text-align: justify;
        /* background-color:purple; */
    }
    h3{
        text-align: center;
    }
    b{
        color:red;
    }
</style>
</head>
<body>

<div class="container">
    <h3> Cars and its Cost </h3>
</div>



<?php

class Car {

    var $cost = 500000;
 
     public function printName($name,$showroom) {
 
         echo '<b>Car name: </b>'. $name .' &nbsp <b> Name of showroom is: </b>'.$showroom. "<br><br>"; 
 
     } 
 
 }
 
 
 
 class Cost extends Car {
 
     public function printName($name,$showroom) {
 
        echo '<b> Car name: </b>'. $name .' &nbsp <b> Name of showroom is: </b>'.$showroom. "<br><br>"; 

         echo '<b>Price is: </b>' . $this->cost."<br><br>";
         echo"<hr>";
 
     }
 
 }
 
 $obj = new Car();
 
 $obj->printName('Ciaz','ABT Maruti'); 

 $obj1= new Cost();
 
 $obj1->printName('Baleno','ABT Maruti'); 


?>

</body>
</html>