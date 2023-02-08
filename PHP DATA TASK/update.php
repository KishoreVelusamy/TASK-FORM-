<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php and mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>



<style>
     body{
            background: url("https://e1.pxfuel.com/desktop-wallpaper/771/948/desktop-wallpaper-dark-blue-circuit-board-shiny-technology-motion-design-video-blue-circuit-board.jpg");
            background-size: cover;
        }
        *{
            color: #c23131;
        }
</style>
<body>
<div class="container">
        <center>
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label for="" class="control-label col-sm-2">Update ID</label>
                <div class="col-sm-4">
                <input type="text" name="id" class="form-control" id="Name"><br><br>
            </div>
        </div>
            <div class="form-group">
                <label for="" class="control-label col-sm-2">Update Name</label>
                <div class="col-sm-4">
                <input type="text" name="name" class="form-control" id="Name"><br><br>
            </div>
        </div>
           
            
            <div class="form-group">
                <label for="" class="control-label col-sm-2">Update Age</label>
                <div class="col-sm-4">
                <input type="number" name="age" class="form-control" id="Age"><br><br>
            </div>
        </div>

        <div class="form-group">
                <label for="" class="control-label col-sm-2">Update Gender</label>
                <div class="col-sm-4">
                <input type="text" name="gender" class="form-control" id="Gender"><br><br>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-2">
              <button name="submit" type="submit"  class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
        </center>
</div>





</body>

</html>

<?php

$con = mysqli_connect('localhost', 'root', '', 'database');
if(!$con){
    die ('Connection Error'.mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $u_age = $_POST['age'];
    $gen = $_POST['gender'];
    $sql = "UPDATE studentdetails SET name='$name', age='$u_age' ,gender='$gen' WHERE id='$id'";

    if ($con->query($sql)) {
        echo "data updated successfully";
        die();
    } else {
        echo "Insert failed";
    }

}
?>