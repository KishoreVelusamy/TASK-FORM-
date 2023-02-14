<?php
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','registerform')or die('Unable to connect');

$sql="INSERT INTO registereddata (name,age,email,password) VALUES ('{$name}',{$age},'{$email}','{$password}')";

if($con->query($sql)){
    echo "Data added successfully";
}
?>