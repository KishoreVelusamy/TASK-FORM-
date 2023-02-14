<?php

session_start();
if(isset($_SESSION['Username'])){
    header("location:dashboardpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="Logintask.css">
    
</head>
<body>
    <form  action="loginvalid.php" method="post">
        <h1>FORM</h1>
            <label for="#">User name</label>
            <input type="text" name="Username" id="name" placeholder="Enter Your Name" maxlength="20" required>
            <label for="#">Password</label>
            <input type="password" name="Password" id="Password" required>
            <button name="login">Log In</button>
    </form>
</body>
</html>