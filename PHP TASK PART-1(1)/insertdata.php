<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','userregisteration')or die('Unable to connect');

$sql="INSERT INTO details (name,email,password) VALUES ('$name','$email','$password')";
$form=mysqli_query($con,$sql);

if($form){
    echo "Data added successfully";
}
?>