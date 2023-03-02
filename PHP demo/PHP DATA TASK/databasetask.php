
<?php 



$rlno=$_POST['rlno'];
$name=$_POST['sname'];
$age=$_POST['sage'];
$gen=$_POST['sgender'];


$con = mysqli_connect("localhost","root","","database");


$sql = "INSERT INTO  studentdetails (id,name,age,gender) values ('$rlno','$name','$age','$gen')";

$form = mysqli_query($con,$sql);


if($form){

    echo "Data is added successfully";  
    die();
    }
    else{
 
        echo "Data is not added";
      
    }
?>
  
</body>

</html>


