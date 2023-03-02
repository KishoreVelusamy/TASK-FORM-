<?php

session_start();
if(isset($_SESSION['email'])){
    header("location:dashboardpage11.php");
}
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color:#00ffff;  
 
}  
button {   
       background-color: khaki;   
       width: 100%;  
        color: orchid;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #fff0f5;
    }   
 input[type=email], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7; 
        color:red;  
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: 	#00ffff;  
    }   
</style>   
</head>    
<body>    
    <center> <h1>  Login Form </h1> </center>   
    <form method="post" action="loginvalidate.php">  
        <div class="container">   
            <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="login" name="login">Login</button>  
              
        </div>   
    </form>     
</body>     
</html> 