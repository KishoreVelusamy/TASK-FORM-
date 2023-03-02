<?php 

$id = $_POST['delete'];

$connect = mysqli_connect("localhost","root","","calendar");

$my_query = "DELETE FROM eventscalendar WHERE id='$id'";

    if($con = $connect->query($my_query)){


        echo "you event has been successfully removed";



    }

?>