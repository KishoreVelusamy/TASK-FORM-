<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    </head>
<body>

<div class="container">
    <h2 align="center">Show Data</h2>
</div>



<?php

$con=mysqli_connect("localhost","root","","imageupload") or die('Unable to connect');


    $sql="SELECT * FROM imagedata";

    $result=$con->query($sql);

    if($result->num_rows>0){

        while($row=$result->fetch_assoc()){

            echo "<div class='col-sm-2'>

            <img width='100px' height='100px'src='data:image;base64,{$row["image"]}'>

            </div>";

            
            echo "<br>";
        }
    }

?>






            

</body>
</html>