<?php


$con=mysqli_connect("localhost","root","","database");

$sql="SELECT * FROM studentdetails WHERE name LIKE '{$_POST["s"]}%'";
$res=$con->query($sql) ;
    echo "<table>
       <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
       </tr>"; 
if($res->num_rows>0){

    while($row=$res->fetch_assoc())
    {
        echo
         "<tr>
            <td>.$row['id']. </td>
            <td>. $row['name']. </td>
            <td>.$row['age'].</td>
            <td> .$row['gender'].</td>
         </tr>";
         }
         echo "</table>";
       }
       else{
        echo "<p><br>No record found</p>";
        }  
?>