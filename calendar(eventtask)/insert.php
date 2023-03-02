<?php 

$event = $_POST['event'];
$date = $_POST['date'];

$connect = mysqli_connect("localhost","root","","calendar");

$my_query = "INSERT INTO eventscalendar(event,date) VALUES ('$event','$date')";

$verify = $connect->query("SELECT date FROM eventscalendar WHERE date='$date'");

if($verify->num_rows < 5){


    if($con = $connect->query($my_query)){
        echo "Successfully added your events!!!";
    }
 } else {
        echo "Ooopss...Sorry..You are already reached the maximun limit";
 }

?>