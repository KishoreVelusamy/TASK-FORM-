<?php



$i=$_POST['rollno'];
$n=$_POST['uname'];
$g=$_POST['bog'];




$mysqli = new mysqli("localhost","root","","database");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql="INSERT INTO userdetails (id,name,gender) values('$i','$n','$g')";

$ab=mysqli_query($con,$sql);


if($ab)
{
    echo "Data is added successfully";
}else
{
    echo "Data is not added";
}




?>