<?php


$i=$_POST['id'];
$n=$_POST['name'];
$g=$_POST['gender'];
$a=$_POST['age'];
$e=$_POST['email'];
$p=$_POST['password'];



$con = mysqli_connect("localhost", "root", "", "details");
if(!$con){
    die ("Connection Error".mysqli_connect_error());
}


$sql="INSERT INTO userdetails (id,name,gender,age,email,password) values('$i','$n','$g','$a','$e','$p')";

$ab=mysqli_query($con,$sql);


if($ab)
{
    echo "Data is added successfully";
}else
{
    echo "Data is not added";
}




?>