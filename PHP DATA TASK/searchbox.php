<?php
//connecting database
$connect = new mysqli('localhost', 'root', '', 'database');

if($connect->connect_errno){
    echo "Failed to connect.".$connect->connect_error;
    die();
}

if(isset($_POST['query'])){
    $search = $_POST['query'];
    $query = "SELECT name FROM studentdetails WHERE name LIKE '$search%'";
    $con = $connect->query($query);
    if ($con->num_rows > 0) {
        while($row= $con->fetch_assoc()){
            $number = 1;
            echo "<a class='list-group-item ml-2  style='width:70%''>".$row['name']."</a>";
            $number++;
        }
    }else {
        echo "<a class='list-group-item ml-2'>No records found.</a>";
    }
}

?>