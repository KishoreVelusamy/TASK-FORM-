<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="jquery-3.6.3.min.js"></script>
  <title>AJAX TASK</title>
  <style>
    body{
        background-color:rgb(117 190 218 / 0.5);;
    }

  </style>

</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form id="form" class="form-horizontal" action="" method="post" autocomplete="off">
  <div class="form-group">
      <label class="control-label col-sm-2">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Age</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="age"  name="age">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>



<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            $.ajax({
                url:"insertdata.php",
                type:"post",
                data:$("#form").serialize(),
                success:function(d){
                    alert(d);
                }
            });

        });
    });
</script>

</body>
</html>
