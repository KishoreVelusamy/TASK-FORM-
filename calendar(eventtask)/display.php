<?php 


$connect = mysqli_connect("localhost","root","","calendar");

$my_query = "SELECT * FROM eventscalendar";

$con = $connect->query($my_query);

$event_array = [];

if($con->num_rows > 0){
    while($row= $con->fetch_assoc()){
        $event_array[] = [$row['date'] , $row['event'] , $row['id']];
    }

}
echo json_encode($event_array);
?>