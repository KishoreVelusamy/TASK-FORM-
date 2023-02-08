<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DATABASE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<style>
  body{
            background: url("https://e1.pxfuel.com/desktop-wallpaper/771/948/desktop-wallpaper-dark-blue-circuit-board-shiny-technology-motion-design-video-blue-circuit-board.jpg");
            background-size: cover;
  }
  #display{
    margin-top:-15px;
    color:green;
  }
  div{
    color:red;
  }
</style>

<body>
  <div class="container">
    <h2>Search Text</h2>

    <div class="container row">
      <form action="demomain.php" method="post" autocomplete="off" >
        <div class="input-group cl-md-2">
          <input type="text" class="form-control" name="sname" id="sname1" placeholder="Search here.....">
          <div>
            <input type="submit" class="input-group-text btn btn-success" id="basic-addon2" placeholder="Search">
          </div>
        </div>
      </form>

    </div>
    <div class="row" style="margin-top:4%">
      <div id="display">
        
      </div>
    </div>

    <div class="row">
            <table class="bg-light table-light mb-2">
                <tr>
                    <th>Roll no</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>

                <?php
                error_reporting(0);




                $con = new mysqli('localhost', 'root', '', 'database');

                
                if ($con->connect_errno) {
                    echo $con->connect_errno;
                    echo "database is not connected!!!";
                    die();
                }


                
                $referencename = $_POST['sname'];
                $query = "SELECT * FROM studentdetails where name='$referencename'";
                $sql = mysqli_query($con, $query);
                $row = mysqli_num_rows($sql);




                if ($row > 0) {
                    while ($data = mysqli_fetch_assoc($sql)) {
                        echo "<tr>
                        <td>" . $data['id'] . "</td>
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

 

  <script>

$(document).ready(function () {
    $("#sname1").keyup(function () {
      var text = $("#sname1").val();
      if (text != "") {
        $.ajax({
          url: "searchbox.php",
          method: "post",
          data: { query: text },
          success: function (response) {
            $("#display").html(response);
          },
        });
      } else {
        $("#display").html("");
      }
    });
    $(document).on('click','a',function(){
      $("#sname1").val($(this).text());
      $("#display").html('');
    });
  });


  </script>
</body>

</html>