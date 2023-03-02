<html>
<body>


<?php

$nameErr=$emailErr=$passwordErr="";
$name=$email=$password="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(empty($_POST['name']))
    {
        $nameErr="The Field is required";
    }
    else{
        $name = test_input($_POST['name']);
    }
if(empty($_POST['email']))
    {
        $emailErr="The Field is required";
    }
    else{
        $email= test_input($_POST['email']);
    }
}

?>

<form action="" method="post">
Name: <input type="text" name="name">
<span>*<?php echo $nameErr;?></span><br>
E-mail: <input type="text" name="email">
<span>*<?php echo $emailErr;?></span><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>