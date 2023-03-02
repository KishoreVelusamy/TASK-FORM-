<!DOCTYPE html>
<head>

</head>
<body>

<h2 align=center>CARS</h1>



<?php

abstract class Car{
    abstract function display($ab);
}

class model extends Car{
    function display($ab){
        echo "$ab <br>";

    }

}
class year extends Car{
    function display($ab){
        echo "$ab <br>";

    }

}



$obj= new model();
$obj->display("Audi");

$obj1= new model();
$obj1->display(2018);


echo "<hr>";
?>

</body>
</html>