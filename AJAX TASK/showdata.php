<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
  table{
    margin: 3% 25%; 
  }
table, th, td {
  border: 2px ridge black;
}
td, th {
  text-align: center;
  height: 40px;
  vertical-align: bottom;
  padding:30px;

}
tr:hover {background-color: coral;}
</style>


  
</head>

<body   class="responsive">

<h3 align="center"><i>SHOW ALL THE REGISTERED DATA</i></h3>

<form align="center" class="form-inline"  class="container" id="submit" method="post">

  

  <div id="responsecontainer"></div>

  
</form>



<script>

$(document).ready(function() {

             

  $.ajax({    //create an ajax request to display.php
    type: "GET",
    url: "showdata.php",             
    dataType: "php",   //expect html to be returned                
    success: function(response){                    
        $("#responsecontainer").html(response); 
        //alert(response);
    }

});
});


</script>

<?php


$con=mysqli_connect("localhost","root","","registerform");

$sql="SELECT * FROM registereddata";
$res=$con->query($sql) ;
    echo "<table>
       <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
       </tr>"; 
if($res->num_rows>0){

    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
           echo" <td>{$row['name']}</td>";
           echo" <td>{$row['age']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['password']}</td>";
         echo "</tr>";
         }
         echo "</table>";
       }
       else{
        echo "<p><br>No record found</p>";
        }  
?>

</html>