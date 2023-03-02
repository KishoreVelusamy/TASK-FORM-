<?php

$n=$_POST['name'];
$g=$_POST['gender'];
$a=$_POST['age'];
$e=$_POST['email'];




$con=new mysqli("localhost","root","","details");
if(!$con){
    die ('Connection Error'.mysqli_connect_error());
}

$sql = "update students set , age='$a', gender='$g',email='$e' where name='$n'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$n."-".$a."-".$g."-".$e;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>