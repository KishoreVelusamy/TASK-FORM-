<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<style>
    *{
        color:red;
    }
    h2{
        color:yellowgreen;
    }
  label,
  input,
  button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 100%;
  }
 .common_box_body {
    padding: 15px;
    border: 12px solid #28BAA2;
    border-color: #28BAA2;
    border-radius: 15px;
    margin-top: 10px;
    background: #d4edda;
}
</style>
</head>
<body>
<div class="common_box_body test">
  <h2>Registration</h2>
  <form action="insertdata.php" method="post" name="registration" id="registration">
 
    <label for="firstname">Name</label>
    <input type="text" name="name" id="name" placeholder="John"><br>
 
   
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"><br>
 
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder=""><br>
 
    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
  </form>
</div>
 
<script>
$(document).ready(function(){
  $("#registration").validate({
    // Specify validation rules
    rules: {
      name: "required",
      
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
      
    },
  
  });
});
</script>
</body>
</html>