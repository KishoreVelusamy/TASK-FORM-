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
    body{
            /* background: url("https://e1.pxfuel.com/desktop-wallpaper/771/948/desktop-wallpaper-dark-blue-circuit-board-shiny-technology-motion-design-video-blue-circuit-board.jpg");
            background-size: cover; */
        }
        label{
            color:red;
            text-align:center;
        }
        .row{
            margin-left:10%
        }
</style>


  
</head>

<body   class="responsive">

  




<form class="form-inline" action="formdisplay.php" class="container" style="width: 30%; margin-top: 50px; padding:35px;   border-radius: 10%; " id="submit" method="post">


<div class="form-group">
    <label class="form-label col-sm-4">Show Details:</label>
    <div class="col-sm-8">
    <input type="number" name="disp" class="form-control" id="name" required>
  </div>
  </div><br>
  <div class="form-group">

<div class="col-sm-offset-6 col-sm-2">

  <button type="submit" class="btn btn-danger" id="sub1">Show</button>
  </div>



  
</form>

    <div class="row">
    <br><br>
      <table class="bg-light table-light mb-2">
        <tr>
          <th>Roll no &nbsp;</th>
          <th>Name &nbsp;</th>
          <th>Age &nbsp;</th>
          <th>Gender &nbsp;</th>
        </tr>






        <?php
        $rlno = $_POST['disp'];
       
        $con = new mysqli("localhost","root","","database");

        $sql = "SELECT * FROM studentdetails WHERE id='$rlno'";
        $connect = mysqli_query($con, $sql);
        $row = mysqli_num_rows($connect);

        if ($row > 0) {
          while ($data = mysqli_fetch_assoc($connect)) {
            echo "<tr>
            <td>" . $data['name'] . "</td>
            <td>" . $data['age'] . "</td>
            <td>" . $data['gender'] . "</td>
         </tr>";
          }
        }
        ?>

      </table>
    </div>
	</div>
  
</body>

</html>