<?php 

error_reporting(0);

$rlno=$_POST['rlno'];



$con = mysqli_connect("localhost","root","","database");


$sql = "SELECT * FROM studentdetails WHERE id='$rlno'";

$form = mysqli_query($con,$sql);


if($form){

    echo "Data is found";  
    die();
    }
    else{
 
        echo "Data is not found";
      
    }
?>
  
</body>

</html>


