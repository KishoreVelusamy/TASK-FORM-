<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <style>
        form{
            
            padding:35px 35px ; 
            border-radius: 10%; 

            
        }
    </style>



</head>


<body   class="responsive" style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">


<div>
   <form action="delete.php" class="container"  id="submit" method="post">
  
                
  <h1>Delete page</h1>

<div class="form-group">
  <label>ID:</label>
  <input type="number" name="rlno" class="form-control" id="rno" required>
</div>


<button name="delete" type="submit" class="btn btn-info" id="sub1">DELETE DATA</button>

                
                        
<span><a href="./databasetask.php">Back</a></span>

   </form>
   </div>

</body>
</html>
<?php


   
$formcon = new mysqli("localhost","root","","database");


if (isset($_POST['delete'])) {
$id = $_POST['rlno'];  
$sql = "DELETE FROM studentdetails WHERE id='$id'";

if ($formcon->query($sql)) {
    echo('data deleted successfully!!!!');
    
} else {
    echo "failed to delete!!!";
}
}
?>
